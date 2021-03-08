<style>

    #copyright{
        text-align: center;
        color: gray;
        width: 100%;
        font-size: 1.2em;
        bottom: 0;
        position: absolute;
    }

    .animation{
      height:0px;
      width:1px;
      border-bottom:1px solid #000;

      -webkit-animation: increase 3s;
      -moz-animation:    increase 3s;
      -o-animation:      increase 3s;
      animation:         increase 3s;
      animation-fill-mode: forwards;
    }

    @keyframes increase {
    100% {
        width: 100%;
    }
}

</style>

<div id="copyright">
<div class="animation mb-1"></div>
<div class="mt-2 mb-1">African Roads By HERITAGES © 2021</div>
</div>
