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
        <hr>
        <div data-date="20191201" data-chapter="chpater-5.3.2">
            <p>Vue 定义了一组观察数组变异的方法, 改变这些数组会改变视图</p>
            <p>push(), pop(), shift(), unshift(), splice(), sort(), reverse()</p>
            <p>使用以上方法会改变被这些方法调用的原始数组, 有些方法不会改变原数组, 例如:</p>
            <p>filter(), concat(), slice() 返回的是一个新数组, 在使用这些非变异方法时, 可以用新数组来代替原数组</p>
            <p class="mt-3">e.g. 调用了 vm.package1 = vm.package1.filter(function(item){ return ...}) </p>
        </div>
        <div data-chapter="chapter-5.4">
            <h6>方法与事件</h6>
            <p class="mt-3">e.g. 点击次数@{{ count }}</p>
            <button @click="count ++">+1</button>
            <button @click="handleAdd()">+1</button>
            <button @click="handleAdd(10)">+10</button>
            <p>Vue 提供了一个特殊的变量 $event, 用于原生访问 DOM 事件</p>
            <h6>阻止链接打开</h6>
            <a href="http://comlibra.com" @click="handleClick('禁止打开 preventDefault()', $event)">打开链接</a>
        </div>
        <div data-chapter="chapter-5.4.2" class="mt-3">
            <p>上叙的 event.prventDefault(), 也可以使用 Vue 事件的修饰符来实现, 在@绑定的事件后增加一个小圆点, “.”, 再跟一个后缀来是用修饰符</p>
            <p>.stop, .prevent, .capture, .self, .once</p>
            <p>@click.stop 阻止事件冒泡</p>
            <p>@submit.prevent 提交事件不再重载页面</p>
            <p>@click.stop.prevent 修饰符串联</p>
            <p><span v-pre>@{{ form @submit.prevent }} </span> 只有修饰符</p>
            <p>@click.capture 添加事件侦听器时使用事件捕获模式</p>
            <p>@click.self 只当事件在该元素(非自元素)触发回调</p>
            <p>@click.once 只触发一次, 组件同样适用</p>
        </div>
        <hr>
        <div data-chapter="chapter-6" class="mt-3">
            <h6>表单与 v-model</h6>
            <div data-chapter="chapter-6.1">
                <p>@input Vue 实时更新 (拼音阶段也支持)</p>
                <input type="text" @input="handleInput" placeholder="输入...">
                <p>输入的内容是@{{ message }}</p>
            </div>
        </div>
        <div data-chapter="chapter-7" class="mt-3">
            <h6>组件详解</h6>
            <div data-chapter="chapter-7.1">
                <my-component></my-component>
                <p>复用组件: Javascript 对象是引用关系, 如果 return 出的对象引用了外部的一个对象, 这个对象是共享的, 任何一个修改都会同步.
                </p>
                <p>count++</p>
                <same-component></same-component>
                <same-component></same-component>
                <same-component></same-component>
                <p>组件使用了3次, 但是点击任意一个button, 3个的数字都会加1, 那是因为组件的 data 引用的是外部的对象, 这肯定不是我们期望的效果, 所以给组件返回一个新的 data 对象来独立, 示例代码如下:</p>
                <same-component-another></same-component-another>
                <same-component-another></same-component-another>
                <same-component-another></same-component-another>
                <p>点击三个按钮互不影响了, 完全达到复用的目的.</p>
            </div>
            <div data-chapter="chapter-7.2">
                <h6>使用 props 传递数据</h6>
                <p>组件不仅仅是把模版的内容进行复用, 更重要的组件间要进行通信. 通常父组件的模版中包含子组件, 父组件要正向地向子组件传递数据或参数, 子组件接受到后根据参数的不同来渲染不同的内容或执行操作. 这个正向传递数据的过程就是通过 props 来实现的</p>
                <p>在组件中, 使用选项 props 来声明需要从父级接受的数据, props 的值可以是两种, 一种是字符串数组, 一种是对象</p>
                <span>数组用法, 比如我们构造一个数组, 接受一个来自父级的数据message, 并把它在组件模版中渲染. 示例代码如下:</span>
                <message-component message="来自父组件的消息"></message-component>
                <p>props 中声明的数据与组件 data 函数 return 的数据主要区别就是 props 的来自父级, 而 data 中的组件自己的数据, 作用域是组件本身, 这两种数据都可以在模版 template 及计算属性 computed 和方法 methods 中使用.</p>
                <p>由于 HTML 特性不区分大小写, 当使用 DOM 模版时, 驼峰命名(camelCase)的 props 名称要转为短横命名(kebab-case),例如:</p>
                <message-component warn-message="提示信息"></message-component>
                <p>有时候, 传递的数据并不是直接写死的, 而是来自父级的动态数据, 这是可以使用指令 v-bind 来动态绑定 props 的值, 当父组件的数据变化时, 也会传递给子组件. 示例代码如下:</p>
                <input type="text" v-model="parentMessage">
                <message-component :message="parentMessage"></message-component>
                <p>这里的 v-model 绑定了父级的数据 parentMessage, 当通过输入框任意输入时, 子组件接受到的 props “message” 也会实时响应, 并更新组件模版.</p>
                <p>如果你要直接传递数字, 布尔值, 数组, 对象, 而且不使用 v-bind, 传递的仅仅是字符串, 尝试下面的示例来对比</p>
                <message-component message="[1,2,3]"></message-component>
                <message-component :message="[1,2,3]"></message-component>
                <p>同一个组件使用了两次, 第一个传递的是字符串, 第二个传递的是数组</p>
            </div>
            <div data-chapter="chapter-7.2.2">
                <h6>单向数据流</h6>
                <p>业务中遇到两种需要改变props值的情况, 一是父组件传递初始值, 子组件将它作为初始值保存, 在自己的作用域下可以随意更改和使用. 这种情况可以在组件 data 内再声明一个数据, 引用父组件的 prop, 示例代码如下:</p>
                <count-component :initial-count="1"></count-component>
                另一种是 prop 作为需要被转变的原始值传入, 这种情况使用计算属性, 示例代码如下:
                <style-component :width="100"></style-component>
            </div>
            <div data-chapter="chapter-7.2.3">
                <h6>数据验证</h6>
                <p>上面所介绍的 props 选项的值都是数组, 下面将 props 改成对象, 需要用对象的写法 </p>
                <p>一般将你的组件需要提供给别人使用时, 推荐进行数据验证. 比如某个数据必须是数字类型, 如果传入的是字符串, 就会在控制台弹出警告. 示例:</p>
            </div>
            <div data-chapter="chapter-7.3">
                <h5>组件通信</h5>
                <div data-chapter="chapter-7.3.1">
                    <h6>自定义事件</h6>
                    <p>当子组件需要向父组件传递数据时, 就要用到自定义事件. v-on 除了监听 DOM 事件外, 还可以用于组件之间的自定义事件.</p>
                    <p>Javascript 的设计模式, dispatchEvent 和 addEventListener 这两种方法. Vue 组件也有与之类似的一套模式, 子组件 $emit 来触发事件, 父组件用 $on 来监听子组件的事件</p>
                    <p>父组件也可以直接在子组件的标签上使用 v-on 来监听子组件触发的自定义事件, 示例代码如下:</p>
                    @{{ totalPrice }}
                    <price-componen>
                    @increase="handleGetTotal"
                    @decrease="handleGetTotal"></price-component>
                    <p>上面的示例中, 子组件有两个按钮, 分别实现+1和-1的效果, 在改变组件的 data "count" 后, 通过的 $emit() 方法的第一个参数是自定义事件的名称, 示例的 increase, decrease 后面的参数是要传递的数据, 可以不填或者填写多个.</p>
                    <p>除了用 v-on 在组件上监听自定义事件外, 也可以监听 DOM 事件, 这是可以用 .native 修饰符表示监听的是一个原生事件, 监听的是该组件的根元素, v-on:click.native="handleClick"</p>
                </div>
                <div data-chapter="chapter-7.3.2">
                    <h6>使用 v-model </h6>
                    <p>Vue 2.x 可以在自定义的组件上使用 v-model 指令, 示例如下:</p>
                    <p>总数是 @{{ total }}</p>
                    <model-component v-model="total"></model-component>
                    <p><i>仍然是 +1 的效果, 不过这次事件 $emit() 的事件名是特殊的 input, 在使用组件的父级, 并没有在 model-component 上使用 @input="handler", 而是直接使用了 v-model 绑定的一个数据 total, 这也可以是一个语法糖, 因为上面的示例可以间接地用自定义事件 @input="handler" 来实现. </i></p>
                    <p>v-model 还可以用来创建自定义的表单输入组件, 进行数据的双向绑定. 例如:</p>
                    <p>总数是 @{{ total }}</p>
                    <dual-component v-model="total"></dual-component>
                    <button @click="handleReduce">-1</button>
                    <p><i>实现这样一个具有双向绑定的 v-model 组件要满足下面的两个条件: 1, 接受一个 value 属性, 2, 在有新的 value 时触发 input 事件.</i></p>
                </div>
                <div data-chapter="chapter-7.3.3">
                    <h6>非父子组件通信</h6>
                    <p>非父子组件一般有两种: 兄弟组件和跨多级组件</p>
                    <p>在 Vue 2.x中, 推荐使用一个空的 Vue 实例作为中间总线 bus, 也就是一个中介. 示例:</p>
                    @{{ message }}
                    <bus-component></bus-component>
                    <p><i>创建了一个 bus 的空的 Vue 实例, 在 app Vue 实例初始化时, 也就是在生命周期 mounted 钩子函数里监听了来自 bus 事件 on-message, 在组件 bus-component 中, 点击按钮会通过 bus 把事件 on-message发出去, 此时 app 就会接受到来自 bus 的事件, 进而在回调里完成自己的业务逻辑.</i></p>
                    <p>这种方法可以巧妙且轻量实现任何组件件的通信. 如果深入使用, 可以扩展 bus 实例, 给它添加 data, methods, computed 等选项. 当你的项目比较大, 可以选择更好的状态管理解决方案 vuex.</p>
                    <p>除了中央事件总线 bus 外, 还有两种方法可以实现组件间通信: 父链和子组件索引.</p>
                </div>
                <div data-chapter="chapter-7.4.3">
                    <h6>slot 用法</h6>
                    <p>在组件内使用特殊的 <slog> 元素可以为这个子组件开启一个插槽 slot, 在父组件模版里, 插入在子组件标签内的所有内容将替代子组件的 <slot> 标签及它的内容. 示例代码如下:</p>
                    <child-component>
                        <p>来自父组件的消息</p>
                    </child-component>
                    <h6>具名 slot</h6>
                    <p>给 slot 元素指定一个 name 后可以分发多个内容, 具名 slot 可以与单个 slot 共存, 如:</p>
                    <main-component>
                        <h2 slot="header">标题</h2>
                        <p>正文内容</p>
                        <div slot="footer">底部信息</div>
                    </main-component>
                    <h6 class="mt-3">作用域插槽</h6>
                    <p>是一种特殊的 slot, 使用一个可以复用的模版替换已渲染元素. 如:</p>
                    <area-component>
                        <template scope="props">
                            <p>来自父组件信息</p>
                            <p>@{{ props.msg }}</p>
                        </template>
                    </area-component>
                    <p>观察自组件的模版, 在 slot 元素傻姑娘有一个类似 props 传递数据给组件的写法 msg="" 将数据传递到了插槽. 父组件中使用了 template元素, 而且拥有一个 scope=“props” 的特性, 这里的 props 只是一个临时变量, 就像 v-for=“item in items” 里面的 item 一样. template 内可以通过临时变量 props 访问来自子组件插槽的数据 msg</p>
                    <p>作用域插槽更具代表性的用法是列表组件, 允许组件自定义应该如何渲染列表每一项, 如:</p>
                        <my-list :books="books">
                            {{-- 作用域插槽也可以是具名的 slot --}}
                            <template slot="book" scope="props">
                                <li>@{{ props.bookName }}</li>
                            </template>
                        </my-list>
                </div>
            </div>

        </div>
        <div data-date="date-1203" data-chapter="chapter-9">
            <h5>Render 函数</h5>
        </div>
        <hr>
        <div data-date="date-1204" data-chapter="chapter-11.2">
            <h6>Vuex 与状态管理</h6>
            <p> store 包含了应用的数据(状态)和操作过程, 数据保存在 Vuex 选项的 state 字段内, 比如, 定义一个数据 count, 初始值为0: </p>
            const store = new Vuex.Store({
                state: {
                    count: 0,
                },
            });
            <p>在任何组件内, 可以通过 $store.state.count 读取.</p>
            <p>在组件内, 来自 store 的数据只能读取, 不能手动修改, 改变 store 中数据唯一的途径就是显式地提交 mutations. Mutations 是 Vuex 的第二个选项, 用来直接修改 state 里的数据. </p>
            const store = new Vuex.Store({
                state: {
                    count: 0,
                },
                mutations: {
                    increment (state) {
                        state.count ++;
                    },
                    decrease (state) {
                        state.count --;
                    },
                },
            });
            <p>在组件内, 通过 this.$store.commit 方法来执行 mutations, 这看起来像 Javascript 的观察者模式, 组件只负责提交事件名, Vuex 对应的 mutations 完成业务逻辑.</p>
            <p>mutations 还可以接受第二个参数, 可以使数字, 字符串, 或对象等类型.</p>
            mutations: {
               increment(state, n) {
               n = n ||1
               state.count +=n;
               }
            }
            <p>组件中使用时, 当一个参数不够用时, 可以传入一个对象, 无限扩展.</p>
            <p>提交 mutations 的另一种方式是直接使用包含 type 属性的对象, 在 index.vue 组件中,</p>
            this.$store.commit({ type: 'increment', count =10 });
            <p>Vuex 还有3个选项可以使用: getters, actions, modules</p>

        </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
    <script>
        var bus = new Vue();
        var data = {
            count: 0,
        };
        const state = new Vuex.Store({
            state: {
                count: 0,
            }
        });
        Vue.component('my-list',{
            props: {
                books: {
                    type: Array,
                    default: function() {
                        return [];
                    }
                },
            },
            template: '\
            <ul>\
                <slot name="book"\
                    v-for="book in books"\
                    :book-name="book.name">\
                </slot>\
            </ul>',
        });
        Vue.component('area-component',{
            template: '\
            <div class="container">\
                <slot msg="来自子组件信息">\
                </slot>\
            </div>',

        });
        Vue.component('main-component',{
            template: '\
            <div class="container">\
                <div class="header">\
                    <slot name="header"></slot>\
                </div>\
                <div class="main">\
                    <slot></slot>\
                </div>\
                <div class="footer">\
                    <slot name="footer"></slot>\
                </div>\
            </div>',
        });
        Vue.component('child-component',{
            template: '\
            <div>\
                <slot>\
                <p>如果父组件没有内容, 我将出现.<p>\
                <slot>\
            </div>',
        });
        Vue.component('bus-component', {
            template: '<button @click="handleEvent">点击</button>',
            methods: {
                handleEvent: function(){
                    bus.$emit('on-message', '来自组件 bus-component 的消息');
                },
            },
        });
        Vue.component('dual-component', {
            props: ['value'],
            template: '<input :value="value" @input="updateValue">',
            methods: {
                updateValue: function(event){
                    this.$emit('input', event.target.value);
                },
            },
        });
        Vue.component('model-component',{
            template: '<button @click="handleClick">+1</button>',
            data: function(){
                return {
                    count: 0,
                }
            },
            methods: {
                handleClick: function(){
                    this.count++;
                    this.$emit('input', this.count);
                },
            }

        });
        Vue.component('price-component',{
            template: '\
                <div>\
                <button @click="handleIncrease">+1</button>\
                <button @click="handleDecrease">-1</button>\
            </div>',
            data: function(){
                return {
                    count: 0,
                }
            },
            methods: {
                handleIncrease: function(){
                    this.count++;
                    this.$emit('increase', this.count);
                },
                handleDecrease: function(){
                    this.count--;
                    this.$emit('decrease', this.count);
                },
            }
        });
        Vue.component('same-component', {
            template: '<button @click="count++">@{{ count }}</button>',
            data: function(){
                return data;
            },
        });
        Vue.component('same-component-another', {
            template: '<button @click="count++">@{{ count }}</button>',
            data: function(){
                return {
                    count: 0,
                }
            },
        });
        Vue.component('message-component',{
            props: ['message','warnMessage','parentMessage','messagOne','messageTwo'],
            template: '<div>@{{ message }}@{{ warnMessage }}@{{parentMessage}}@{{ message.length }}</div>',
        });
        Vue.component('count-component', {
            props: ['initialCount'],
            template: '<div>@{{ counter }}</div>',
            data: function(){
                return {
                    counter: this.initialCount,
                }
            },

        });
        Vue.component('my-component', {
            template: '<div>@{{ msg }}</div>',
            data: function(){
                return {
                    msg: '这是组件',
                }
            },
        });
        Vue.component('style-component',{
            props: ['width'],
            template: '<div :style="style">组件内容</div>',
            computed: {
                style: function(){
                    return {
                        width: this.width +'px',
                    }
                },
            },

        });
        Vue.component('object-component', {
            props: {
                // 数字类型
                propA: Number,
                // 必须是字符串或者是数字类型
                propBB: [String, Number],
                // 布尔值, 如果没有定义, 默认值为 true
                propC: {
                    type:  Boolean,
                    default: true,
                },
                // 数字, 必须
                propD: {
                    type: Number,
                    required: true,
                },
                // 如果是数组或对象, 默认值必须是一个函数来返回
                propE: {
                    type: Array,
                    default: function(){
                        return [];
                    }
                },
                // 自定义验证函数
                propF: {
                    validator: function(){
                        return value>10;
                    }
                },
                // 验证的 type 可以是 String, Boolean, Number, Array, Object, Function, type 也可以是一个自定义构造器, 使用 instanceof 检测.

            },
        });
        var vm = new Vue({
            el: '#app',
            data: {
                date: new Date(),
                link: '<a href="#">linksToHere</a>',
                number: 100,
                isOK: false,
                text: '8,98,090',
                showBtn: true,
                books: [
                    {
                        name: 'vue.js 实战',
                    },
                    {
                        name: 'vue.js 前端开发技术',
                    },
                ],
                package1: [
                    {
                        name: 'iphone watch',
                        price: 3000,
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
                count: 0,
                message: '',
                parentMessage: '来自组件的动态信息',
                totalPrice: 0,
                total: 0,


            },
            mounted: function() {
                var _this = this;
                this.timer = setInterval(function() {
                    _this.date = new Date();
                }, 1000);
                bus.$on('on-message', function(msg){
                    _this.message = msg;
                });
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
                },
                handleAdd: function(count){
                    count = count || 1;
                    this.count += count;
                },
                handleClick: function(message, event){
                    event.preventDefault();
                    window.alert(message);
                },
                handleInput: function(e){
                    this.message = e.target.value;
                },
                handleGetTotal: function(total){
                    this.totalPrice = total;
                },
                handleReduce: function(){
                    this.total--;
                },
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
        });
        vm.package1 = vm.package1.filter(function(item){
            return item.price >= 4000;
        });

    </script>
@endsection
