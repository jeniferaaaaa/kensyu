<!DOCTYPE html>
<head>
    <title>Sample</title>
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @if (env('APP_DEBUG'))
        <script src="{{ asset('js/vue.js') }}"></script>
    @else
        <script src="{{ asset('js/vue.min.js') }}"></script>
    @endif
</head>

<body>
<div id="app">

    <div class="vue">
      <ul class="tabs">
        <li v-on:click="change('1')" v-bind:class="{'active': isActive === '1'}" display:block>おすすめ</li>
        <li v-on:click="change('2')" v-bind:class="{'active': isActive === '2'}" display:block>ジン</li>
        <li v-on:click="change('3')" v-bind:class="{'active': isActive === '3'}" display:block>ウォッカ</li>
        <li v-on:click="change('4')" v-bind:class="{'active': isActive === '4'}" display:block>ラム</li>
        <li v-on:click="change('5')" v-bind:class="{'active': isActive === '5'}" display:block>テキーラ</li>
      </ul>

      <ul class="contents">
        <li v-if="isActive === '1'">{{$test1}}</li>
        <li v-else-if="isActive === '2'">{{$test2}}</li>
        <li v-else-if="isActive === '3'">{{$test3}}</li>
        <li v-else-if="isActive === '4'">{{$test2}}</li>
        <li v-else-if="isActive === '5'">{{$test3}}</li>
      </ul>
    </div>

    </div>    
    <script>
        new Vue({
            el: '#app',
            data: {
                isActive: '1'
            },
            methods: {
                change: function(num){
                    this.isActive = num
                }
            }
         })           
    </script>
    <style>
     ul{
    margin: 0;
    padding: 0;
  }
  li{
    list-style: none;
  }
  .tabs {
    overflow: hidden;
  }
  .tabs li,
  .tabs label {
    float: left;
    padding: 10px 20px;
    border: 1px solid #ccc;
    cursor: pointer;
    transition: .3s;
  }
  .tabs li:not(:first-child),
  .tabs label:not(:first-of-type) {
    border-left: none;
  }
  .tabs li.active,
  .tabs :checked + label {
    background-color: #000;
    border-color: #000;
    color: #fff;
    cursor: auto;
  }
  .contents{
    overflow: hidden;
    margin-top: -1px;
  }
  .contents li {
    width: 420px;
    padding: 20px;
    border: 1px solid #ccc;
  }

  .vue_radio input{
    display: none;
  }
    </style>
</body>
</html>