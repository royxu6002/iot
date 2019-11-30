@extends('layouts.app')
@section('title', 'vue test')
@section('content')
<section>
    <div class="container">
        <div id="app">
        <div class="chapter2">
                e.g.1: 时间初显示 @{{ date }}
            <br>
            e.g.2: 输出 html <span v-html="link"></span>
            <br>
            e.g.3: 显示 <span v-pre> @{{innerContentWontBeCompiled}} </span>标签
            <br>
            <p>e.g.4:Javascript表达式进行简单的运算, 三元运算等</p>
            @{{ number /10 }}
            <br>
            @{{isOK? 'sure':'no'}}
            <br>
            @{{ text.split(',').reverse().join(',') }}
            <br>
            use computed method to function:
            @{{ splitText }}
            <p>page1.1</p>
            <button v-if="showBtn" v-on:click="handleClick">Click me to console.log the event</button>
        </div>
        <hr>
        {{-- 2019.11.28 --}}
        <div class="chapter3">
            1. 价格计算 computed 方法:
           <span v-pre>@{{ prices }}</span> @{{ prices }}
            <br>
           2. 每一个计算属性都包含一个 getter 和 setter, 上面的例子只是使用了 getter 来读取, 在你需要时, 可以提供一个 setter 函数, 当手动修改计算属性的值就像修改一个普通数据那样, 就会触发 setter 函数:
           <span v-pre>@{{ fullName }}</span> @{{ fullName }}
            <br>
            注: 1)在申明一个计算属性时, 可以直接使用默认的写法, 不必将getter, setter 都申明.2)计算属性和方法区别, 计算属性是基于它的依赖缓存的, 一个计算属性所依赖的数据发生变化时, 它才会重新取值.
        </div>
        <div class="chapter4 mt-3">

            <p>v-bind 及 class 与 style 绑定</p>

            <button :class="classes">Class</button>
            <p :style="{ 'color': color, 'fontSize': fontSize+'px'}">paragraph style</p>
        </div>
        <div class="chapter5 mt-3">
            <p>Directive 指令</p>
            <template v-if="type ==='name'">
                <label for="">username:</label>
                <input placeholder="please type username">
            </template>
            <template v-else>
                <label for="">email:</label>
                <input type="text" placeholder="email address">
            </template>
            <button @click="toggleInput">switch</button>
        </div>
        <div class="chapter6">
            <input type="text" @input>
        </div>

        </div>
    </div>
</section>
@endsection

@section('scripts')
    <script>
        var vm = new Vue({
            el: '#app',
            data: {
                date: new Date(),
                link: '<a href="#">linksToHere</a>',
                number: 100,
                isOK: false,
                text: '8,98,090',
                showBtn: true,
                package1: [
                    {
                        name: 'iphone watch',
                        price: 2000,
                        count: 1
                    },
                    {
                        name: 'iphone 6pro',
                        price: 6000,
                        count: 1
                    }
                ],
                package2: [
                    {
                        name: 'ipad 4',
                        price: 10000,
                        count: 1
                    },
                    {
                        name: 'macbook pro',
                        price: 18000,
                        count: 1
                    }
                ],
                firstName: 'John',
                lastName: 'Nash',
                size: 'large',
                disabled: true,
                color: 'red',
                fontSize: 20,
                type: 'name',
            },
            mounted: function() {
                var _this = this;
                this.timer = setInterval(function() {
                    _this.date = new Date();
                }, 1000);
            },
            beforeDestroy: function(){
                if (this.timer) {
                    clearInteval(this.timer);
                }
            },
            methods: {
                handleClick: function(){
                    console.log('clicked');
                },
                toggleInput: function(){
                    this.type = this.type === 'name' ? 'mail': 'name';
                }
            },
            computed: {
                splitText: function(){
                    return this.text.split(',');
                },
                prices: function(){
                    var prices = 0;
                    for (var i=0; i<this.package1.length; i++){
                        prices += this.package1[i].price * this.package1[i].count;
                    }
                    for (var i=0; i<this.package2.length; i++){
                        prices += this.package2[i].price * this.package2[i].count;
                    }
                    return prices;
                },
                fullName: {
                    // getter 读取
                    get: function(){
                        return this.firstName + ' ' + this.lastName;
                    },
                    // setter 写入
                    set: function(newValue){
                        var names = newValue.split(' ');
                        this.firstName = names[0];
                        this.lastName = names[names.length - 1];
                    }
                },
                classes: function(){
                    return [
                        'btn',
                        {
                            ['btn-' + this.size]:this.size !== '',
                            ['btn-disabled'] : this.disabled,
                        }
                    ];
                }
            }
        })
    </script>
@endsection
