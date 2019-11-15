<div id="app">
    <div class="col-md-8 col-md-offset-2" style="margin-bottom: 50px">
        <div class="row">
            <div class="col-md-12" style="margin-top: 60px">
                <div class="panel panel-default">
                    <h2 style="padding: 0 20px">{{$post->title}}</h2>
                    <div class="panel-body">
                        <h4>{{$post->content}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <h4>评论列表:</h4>
        <div class="row">
            <div class="col-md-12">
                <comment_post :user_id="{{\Auth::id()}}" :comments="{{$collections}}" :post_id="{{$post->id}}" :collections="{{$collections['root']}}"></comment_post>
            </div>
        </div>
    </div>
</div>

//app.js
Vue.component('comment_post', require('./components/comments/Comment_Post.vue'));
Vue.component('comment_root', require('./components/comments/Comment_root.vue'));
Vue.component('comment_child', require('./components/comments/Comment_child.vue'));
const app = new Vue({
    el: '#app'
});

// comment_root
<template>
    <div>
        <div v-for="comment in collections">
            <comment_child :post_id="post_id" :user_id="user_id" :comments="comments" :comment="comment" :collections="collections"></comment_child>
        </div>
    </div>

</template>
<script>
    export default{
        props:['collections','comments','user_id','post_id'],
    }
</script>

// comment_post
<template>
    <div>
        <hr>
        <comment_root :post_id="post_id" :user_id="user_id" :comments="comments" :collections="comment_list"></comment_root>
        <hr>
        <form method="POST" @submit.prevent="post_comment" accept-charset="UTF-8">
            <div class="form-group">
                <label for="comment" class="control-label">Info:</label>
                <textarea v-model="comment_content" id="comment" name="comment" rows="4" class="form-control"
                          placeholder="请填写您的评论"
                          required="required"></textarea>
            </div>
            <button type="submit" class="btn btn-success form-control">提交评论</button>
        </form>
    </div>
</template>
<script>
    export default{
        props:['post_id','collections','comments','user_id'],
        data(){
            return{
              comment_content:'',
              comment_list:this.collections,
            }
        },
        methods:{
            post_comment(){
                axios.post('/post/'+this.post_id+'/comments',{'body':this.comment_content}).then((response)=>{
                    if(response.data.success){
                        this.comment_list.push(response.data.reply_block);
                        this.comment_content='';
                    }
                });
            },
        },
    }
</script>

//comment_child
<template>
    <div class="col-md-12" :class="{ padding : show_level }">
        <h5><span style="color:#31b0d5">{{comment['owner'].name}}</span>:</h5>
        <h5>{{comment.body}}</h5>
        <p v-if="get_is_show_reply()"><a class="reply_btn" @click="show_relpy">回复</a></p>
        <div v-show="is_show">
            <form @submit.prevent="post_comment" accept-charset="UTF-8">
                <div class="form-group">
                    <textarea v-model="comment_content" id="body" name="body" class="form-control"
                              required="required"></textarea>
                </div>
                <button type="submit" class="btn btn-success">立即回复</button>
                <button @click="show_relpy()" type="submit" class="btn btn-default">取消回复</button>
            </form>
        </div>
        <div v-if="is_follow()">
            <comment_root :post_id="post_id" :user_id="user_id" :collections="get_child_list()"
                          :comments="real_comments"></comment_root>
        </div>
        <hr>
    </div>
</template>
<style>
    .col-md-12{
        padding:0;
    }
    .padding{
        padding-left:30px
    }
    .reply_btn{
        cursor : pointer;
        color:#ABABAB;
    }
</style>
<script>
    export default{
        props:['comment','comments','user_id','post_id'],
        data(){
            return{
                 show_level:true,
                 is_show:false,
                 comment_content:'',
                 real_comments:this.comments,
            }
        },
        mounted(){
              if(this.comment.level >2){
                    this.show_level=false;
              }else{
                    this.show_level=true;
              }
        },
        methods:{
            show_relpy(){
                  this.is_show=!this.is_show;
            },
            is_follow(){
                if(typeof(this.comments[this.comment.id])=='undefined'){
                    return false;
                }
                return true;
             },
             get_child_list(){
                return this.comments[this.comment.id];
             },
             get_is_show_reply(){
                return this.user_id!=this.comment['owner'].id;
             },
             post_comment(){
                axios.post('/post/'+this.post_id+'/comments',{'parent_id':this.comment.id,'body':this.comment_content}).then((response)=>{
                    if(response.data.success){
                          this.comment_content='';
                          this.is_show=!this.is_show;
                          if(typeof(this.real_comments[''+response.data.reply_block.parent_id])!='undefined'){
                              this.real_comments[response.data.reply_block.parent_id].push(response.data.reply_block);
                          }else{
                              this.real_comments[this.comment.id]=new Array();
                              this.real_comments[this.comment.id].push(response.data.reply_block);
                          }
                    }
                });
             }
        },
    }
</script>

