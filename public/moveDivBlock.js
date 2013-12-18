 var windowWidth=$(window).width();
            $("#fifth").css("height",(windowWidth*0.7)+"px");
            var secondQuadrant=$("#secondQuadrant");
            var firstQuadrant=$("#firstQuadrant");
            var thirdQuadrant=$("#thirdQuadrant");
            var fourthQuadrant=$("#fourthQuadrant");
            var topBar=$("#top");
            var bottomBar=$("#bottom");
            var leftBar=$("#left");
            var rightBar=$("#right");
            var teamDiv=$("#teamDiv");
            teamDiv.click(function(){
                secondQuadrant.css({width:"55%",height:"40%"});
                firstQuadrant.css({width:"40%",height:"55%"});
                thirdQuadrant.css({width:"40%",height:"55%"});
                fourthQuadrant.css({width:"55%",height:"40%"});
                topBar.css({width:"5%",height:"55%",left:"55%", top:"0%"});
                rightBar.css({height:"5%",width:"55%",right:"0%",top:"55%"});
                bottomBar.css({width: "5%",height: "55%",left: "40%", bottom:"0%"});
                leftBar.css({height:'5%',width:'55%',left:'0%',top:'40%'});
                $(this).css({left:'45%',top:'45%'});
            });
            secondQuadrant.click(function(){
                $(this).css({width:"70%",height:"55%"});
                firstQuadrant.css({width:"25%",height:"70%"});
                thirdQuadrant.css({width:"55%",height:"40%"});
                fourthQuadrant.css({width:"40%",height:"25%"});
                topBar.css({left:'70%',height:"70%"});
                bottomBar.css({left:"55%",height:"40%"});
                leftBar.css({width:"70%",top:"55%"});
                rightBar.css({top:'70%',width:"40%"});
                teamDiv.css({left:'60%',top:'60%'});
            })
            firstQuadrant.click(function(){
                $(this).css({width:"55%",height:"70%"});
                secondQuadrant.css({width:"40%",height:"55%"});
                thirdQuadrant.css({width:"25%",height:"40%"});
                fourthQuadrant.css({width:"70%",height:"25%"});
                topBar.css({left:'40%',height:"70%"});
                bottomBar.css({left:"25%",height:"40%"});
                leftBar.css({width:"40%",top:"55%"});
                rightBar.css({top:'70%',width:"70%"});
                teamDiv.css({left:'30%',top:'60%'});
            })
            fourthQuadrant.click(function(){
                firstQuadrant.css({width:"55%",height:"40%"});
                secondQuadrant.css({width:"40%",height:"25%"});
                thirdQuadrant.css({width:"25%",height:"70%"});
                $(this).css({width:"70%",height:"55%"});
                topBar.css({left:'40%',height:"40%"});
                bottomBar.css({left:"25%",height:"70%"});
                leftBar.css({width:"40%",top:"25%"});
                rightBar.css({top:'40%',width:"70%"});
                teamDiv.css({left:'30%',top:'30%'});
            })
            thirdQuadrant.click(function(){
                firstQuadrant.css({width:"25%",height:"40%"});
                secondQuadrant.css({width:"70%",height:"25%"});
                $(this).css({width:"55%",height:"70%"});
                fourthQuadrant.css({width:"40%",height:"55%"});
                topBar.css({left:'70%',height:"40%"});
                bottomBar.css({left:"55%",height:"70%"});
                leftBar.css({width:"70%",top:"25%"});
                rightBar.css({top:'40%',width:"40%"});
                teamDiv.css({left:'60%',top:'30%'});        
            })
