<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Работаем со стилями</title>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>


<script>

    setInterval(slider, 3000);


    var i=0;



    function slider()
    {
        var x = document.querySelectorAll(".cl1 li");
        var y = document.querySelectorAll(".buttons div");





    if( x[i].classList.contains("active")==true)
    {
        if(i==(x.length-1))
        {
            x[i].classList.remove("active");
           x[0].classList.add("active");

            y[i].classList.remove("checked");
            y[0].classList.add("checked");

           i=0;
        }
        else {
            x[i].classList.remove("active");
            x[i + 1].classList.add("active");

            y[i].classList.remove("checked");
            y[i + 1].classList.add("checked");

            i++;
        }
    }





  }



</script>


<div class="cl1">


<div class=".nav1">

    <ul>
        <li class ="active">
            <img src="1.jpg" alt="альтернативный текст">

        </li>

        <li>

            <img src="2.jpg" alt="альтернативный текст">
        </li>

        <li>
            <img src="3.jpg" alt="альтернативный текст">

        </li>

        <li>
            <img src="4.jpg" alt="альтернативный текст">

        </li>

        <li>
            <img src="5.jpg" alt="альтернативный текст">

        </li>



    </ul>

    <div class="buttons">

        <a href="">
            <div class="checked">

            </div>

        </a>

        <a href="">
            <div>

            </div>
        </a>

        <a href="">
            <div>

            </div>
        </a>

        <a href="">
            <div>

            </div>
        </a>

        <a href="">
            <div>

            </div>
        </a>


    </div>

    
</div>

<!--

-->

</div>



</body>
</html>


