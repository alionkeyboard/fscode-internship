<style>
        .box{
            width:650px;
            height:100%;
            margin:0 auto;
            display: block;
 
        }   
        .div{
            height: 60px;
            width: 60px;
            border: 1px solid  #A9A9A9 ;
            float: left;
            text-align: center;
            line-height: 60px;
 
        }
        .div_origin{
            box-shadow: #A9A9A9 1px 5px 5px;
            background-color: rgb(240,235,213);
            
        }
        .div_lei{
            background:url('img/lei.jpg');background-size:100%;
        }
        .div_number{
            color: red;
            text-align: center;
            line-height: 60px;
        }
        .div_flag{
            background:url('img/flag.png');background-size:100%;
 
        }
        #button_style{
            height:100px;
            width:200px;
            background-color: rgb(240,235,213);
            box-shadow: #A9A9A9 2px 5px 5px;
            display: block;
        }
        #container
        {
            height: 100%;
            width: 100%;
        }
        #div_alert
        {
            margin: 0 auto;
            height:200px;
            width: 200px;
            background-color: rgb(240,235,213);
            text-align: center;
            line-height: 100px;
            box-shadow: #A9A9A9 2px 5px 5px;
            display: none;
        }
        #button_sure
        {
            background-color: #69c0ff;
            box-shadow: #A9A9A9 2px 5px 5px;
            flex:1;
            margin: 20px;
        }
    </style>



    <!DOCTYPE html>
    <html>
    <head>
    	<title></title>
    </head>
   <body>
    <div id = 'container'>
                 <button id ='button_style' onclick="creatGrid()">Start the game</button>
        <div id = 'div_alert'>
            <row id = 'row_end'>
                         Minaya dusdu 
            </row>
            <row  style="display: flex;">
                                 <button id ='button_sure' onclick="creatGrid()">Confirm</button>
            </row>
 
        </div>
        <div class="box"></div>
        
    </div>
</body>

    </html>
</head>

<script>

var leiArr = []; //20 random number mines
         var leiNum; //Number of thunder
    var divElements = document.getElementsByClassName('div')
         var isClick = true; // Whether to click to start
    var box = document.getElementsByClassName('box')[0];
    var button = document.getElementById('button_style');
    box.style.display = 'block'  
         var direction = [[0,1],[0,-1],[1,0],[1,-1],[1,1],[-1,-1],[-1,0] ,[-1,1]]; 
    var alert = document.getElementById('div_alert');




  


    function creatGrid() //Generate 100 grids
    {
        if(!isClick)
        {
           window.location.reload()
        }
        else
        {
                         button.innerHTML ='Restart'
        }
        isClick = !isClick;
        leiNum = 20;
                 for(i=0;i<leiNum;i++) //Generate 20 non-repeating random numbers within 100
        {
            var randomNum = Math.floor(Math.random()*99)+1;
            if(leiArr.indexOf(randomNum) === -1){
                leiArr.push(randomNum);            
            }else{                 
                i= i - 1;
                continue;
            }
        }
        for(i=1;i<=10;i++)
        {
            for(j=1;j<=10;j++)
            {
                var div = document.createElement('div');
                                 (function (x,y){//Right click to monitor
                    div.addEventListener('contextmenu',function(event){
                                         event.preventDefault();//Prevent the right-click default event
                    handleFlag(x,y,event.target);
                    },false)
                                         div.addEventListener('click',function(event){//click listener
                    handleShow(x,y,event.target)
                    },false) 
                })(i,j)
 
                div.className = 'div';
                div.classList.add('div_origin');
                box.appendChild(div);
            }
        }
 
    }



     function handleShow(x,y,obj) //Handle the display of each square
    {
        var isFlagDiv = obj.className.indexOf('div_flag')
                 if(isFlagDiv === -1) //Whether the flag has been inserted into the right button
        {
                 var resultNumber = handlenumber(x,y); //The number of mines in eight directions here
 
                         if(resultNumber === 100) //if it is thunder
            {
                obj.classList.add('div_lei');
                obj.classList.remove('div_origin');
                setTimeout(function()
                {
                    alert.style.display = 'block'
                    box.style.display = 'none';}, 100);
                }
            else
            {   
                obj.classList.remove('div_origin');
                obj.classList.add('div_number');
                obj.innerHTML = resultNumber;
                                 if(resultNumber === 0) //When it encounters 0, it spreads out
                {
                    for(var i = 0;i < length;i++)
                    {
                        var u = x + direction[i][0];
                        var w = y + direction[i][1];
                        var tagetDiv = divElements[(u-1)*10+w-1];
                        if(tagetDiv!== undefined && w < 11 &&w>0&&u < 11 &&u>0)
                        {
                                                         if(tagetDiv.innerHTML==='') //There is no number displayed in the square here, it is not traversed
                            {
                                handleShow(u,w,tagetDiv);
                            }
                        }
                    }
                }
                var span = document.createElement = ('span');
            }
        }   
    }


      function handlenumber(i,j) //Calculate the number of mines with eight directions per square
    {
        var x = i;
        var y = j;
        var number = 0;
        number = (i - 1) * 10 + j;
        if(leiArr.indexOf(number)!==-1)
        {
           return 100;
        }
        else
        {
            number = 0;
            for(var k = 0;k < length;k++)
            {
                x = i + direction[k][0];
                y = j + direction[k][1];
                if(x <11&&y<11&&x>0&&y>0)
                {
                    var res = (x - 1) * 10 + y;
                    if(leiArr.indexOf(res)!==-1)
                    {
                        number++;
                    }
                }
            }
        return (number);
        }
    }


      function handleFlag(x,y,obj) //Handle flag flag
    {
        var row = document.getElementById('row_end');
        var isNumberDiv = obj.className.indexOf('div_number')
        var isFlagDiv = obj.className.indexOf('div_flag');
        if(isNumberDiv === -1)
        {
            (isFlagDiv === -1 )?obj.classList.add('div_flag'):obj.classList.remove('div_flag');
            var tagetDiv = (x - 1) * 10 + y;
            if(leiArr.indexOf(tagetDiv)!==-1 )
            {
                (isFlagDiv === -1)?leiNum--:leiNum++;
            }
        }
        if(leiNum === 0)
        {
            setTimeout(function()
                {
                    alert.style.display = 'block';
                                         row.innerHTML ='Congratulations on success';
                    box.style.display = 'none';}, 100);   
        }
    }

    </script>