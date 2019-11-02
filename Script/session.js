$(function()
        {
            function timeChecker()
            {
                setInterval(function()
                {
                    var storedTimeStamp = sessionStorage.getItem("lastTimeStamp");
                    timeCompare(storedTimeStamp); 
                }, 14000);
            }

            function timeCompare(timeString)
            {
                var currentTime = new Date();
                var pastTime    = new Date(timeString);
                var timeDiff    = currentTime - pastTime;
                var secPast     = Math.floor((timeDiff/1000)); 

                if(timeDiff > 15000){
                    sessionStorage.removeItem("lastTimeStamp");
                    window.location = "logout.php";
                    return false;
                }else{
                    console.log(currentTime +"-"+ pastTime+"="+secPast+" sec past");
                }

            }

            $(document).mousemove(function()
            {
                var timeStamp = new  Date();
                sessionStorage.setItem("lastTimeStamp", timeStamp);
            });

            $(document).keydown(function()
            {
                var timeStamp = new  Date();
                sessionStorage.setItem("lastTimeStamp", timeStamp);
            });
        
            $(document).mousedown(function()
            {
                var timeStamp = new  Date();
                sessionStorage.setItem("lastTimeStamp", timeStamp);
            });
            
            timeChecker();
        });