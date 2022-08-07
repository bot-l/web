<!DOCTYPE html>
<html>
  <head>
    <title> 8.8.8.8 </title>
	
	<script type="text/javascript" src="https://player.marimo.me/jwplayer8/jwplayer.js"></script>

    <style>
      html,
      body {
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;
        background-color: black;
      }
      #player,
      #playerbase {
        position: fixed;
        width: 100%;
        height: 100% !important;
        left: 0;
        top: 0;
        z-index: 10;
      }
      .jw-rightclick {
        display: none !important;
      }
      .jw-display-icon-display {
        border-radius: 50%;
      }
      .loader {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 999996;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.3);
      }
      .loader > .page-loader__spinner {
        position: absolute;
        float: left;
        left: 50%;
        top: 50%;
        height: 100px;
        width: 100px;
        background-repeat: no-repeat;
        background-size: 100px 100px;
        transform: translate(-50%, -50%);
      }
      .rek {
        position: absolute;
        z-index: 999998;
        float: left;
        left: 50%;
        top: 50%;
        height: auto;
        width: auto;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.3);
      }
      .rek_close {
        z-index: 999999;
        position: absolute;
        color: white;
        top: 12px;
        right: 3px;
        cursor: pointer;
        font-size: 20px;
        font-weight: 700;
        line-height: 0;
        -webkit-transition-duration: 0.4s;
        opacity: 1;
      }
      .rek_counter {
        z-index: 999999;
        position: absolute;
        color: black;
        margin: auto;
        width: 100%;
        bottom: 8px;
        background-color: rgba(255, 255, 255, 0.5);
        font-family: tahoma;
        text-align: center;
        cursor: pointer;
        font-size: 14px;
        font-weight: 700;
        text-shadow: 1px 1px 1px white, 0 0 1em white, 0 0 0.2em black;
      }
      .blockout {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 999996;
        width: 45px;
        height: 45px;
        background-color: rgba(0, 0, 0, 0);
      }
    </style>
	

  </head>
  <body>
    <div id="hls"></div>
    <script>
var playerInstance = jwplayer("hls");
            playerInstance.setup({
                sources: [
                    {
                        file:
                            "https://drive.google.com/uc?id=<?=$_GET['id']?>&export=download&confirm=t",
                        type: "video\/mp4",
                        label: "true",
                    },
                ],

                image:"",
            });
			</script>
  </body>
</html>
