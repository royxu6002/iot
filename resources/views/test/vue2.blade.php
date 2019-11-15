<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vue project - 2 simple EVAL reply box </title>
    <meta name="_token" content="{{ csrf_token() }}"/>
    <meta name="keywords" content="import various components, transmit data from parent to child">
    <meta name="keywords" content="window.confirm() grammar, ${variable}, splice methods, unshift() methods">

    <style>
    body{
    font-family: 'Helvetica Neue', Arial, Helvetica, Gevena, sans-serif;
    font-size: 13px;
}
    body p{
        margin: 0;
        padding: 0;
    }
    .header {
        width: 1280px;
        margin: 0 auto;
        height: 200px;
        background-color: #e3e3e3;
        text-align: center;
        line-height: 200px;
    }
    .header p {
        font-size: 50px;
        vertical-align: middle;
    }
    .content {
        width: 1280px;
        margin: 0 auto;
    }
    .replyBox {
    position: relative;
    width: 540px;
    float: left;
    padding: 20px;
}
.username label {
    display: block;
}

.username input {
    width: 100%;
    height: 28px;
    margin: 10px auto 20px;

}
.comment label {
    display: block;
}

.comment textarea{
    margin-top: 10px;
    width: 100%;
    border-color: #d4d4d4 !important;
}
.replyBox button {
    padding: 5px 15px;
    font-size: 15px;
    background-color: #e3e3e3;
    border-radius: 3px;
    margin: 10px;
    -webkit-box-shadow: 3px 3px 5px #d4d4d4;
}
.replyList {
    width: 660px;
    padding: 10px;
    float: left;
    padding: 20px;
}
.commentwrap {
    border: 1px solid #d4d4d4;
    margin-top: 15px;
    padding: 10px;
}
.commentwrap dd {
    line-height: 30px;
}
hr {
    height: 1px;
    border: none;
    background-color: #d4d4d4;
}


    </style>

</head>
<body>
   <div id="app">
        <div class="header">
            <p>Simple reply box in EVAL way</p>
        </div>

        <div class="content">
            <div class="replyBox">
                <div class="username">
                    <label for="">User Name</label>
                    <input type="text" placeholder="Name" v-model="username">
                </div>
                <div class="comment">
                    <label for="comment">Comment</label>
                    <textarea name="comment" id="comment" rows="10" v-model="comment"></textarea>
                </div>
                <button type="submit" @click="postComment">Submit</button>
            </div>

            <div class="replyList">
                <p>Comments on Vue front-end project</p>
                <p v-show="text.length===0" style="font-size: 30px">No comments yet~</p>
                <div class="commentwrap" v-for="(comment, index) in text" :key="index">
                    <dt >@{{ comment.username }} said:</dt>
                    <button style="float: right" @click="deleteComment(index, comment.username)" >Delete</button>
                    <dd>@{{ comment.comment }}</dd>
                </div>
            </div>
        </div>
   </div>

   <script src="{{ asset('js/vue.js') }}"></script>
    <script>
        new Vue({
        el: '#app',
        data: {
            username: '',
            comment: '',

            // priority of the project is to make listener on dom events. i. We make the data rendered on the list which requires the a faker data first.  ii. then we make data pushed into the array of data.
            text : [
                {username: 'John', comment: 'one of the best javascript framework'},
                {username: 'Snow', comment: 'love this framework'}
            ]
        },
        methods: {
            postComment() {
                const username = this.username.trim();
                const comment = this.comment.trim();
                // ii. a. we need to verify the validity of the input
                if (!username || !comment) {
                    alert('Name and Comments cannot be empty');
                    return;
                }

                // ii. b. compact the input data into an object
                const txt = { username, comment };

                // ii. c. inject the object into the data
                this.text.unshift(txt);

                // ii. d. empty the input field
                this.username = '';
                this.comment = '';
            },
            deleteComment(index, name){
                // pay attention to window.confirm() ${name} this grammar
                if(window.confirm(`Are you sure to delete ${name} comment?`)) {
                    this.text.splice(index, 1);
                }
            }
        }
    })
    </script>
</body>
</html>
