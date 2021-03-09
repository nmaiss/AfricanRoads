<style>


    #copyright{
        text-align: center;
        color: gray;
        width: 100%;
        font-size: 1.2em
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

<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
      <div id="copyright">
      <div class="animation mb-1"></div>
      <div class="mt-2 mb-1">African Road By HERITAGES © 2021</div>
      </div>
  </div>
</footer>
