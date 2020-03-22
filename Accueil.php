</HEAD>

<BODY>

<BR/> <BR/> <BR/>

<font face="Arial" size="5" color="#005500">
    <CENTER> <b> Délices  </b> </CENTER> </font>

<H2> <CENTER> Nouvautés!  </CENTER> </H2>

<H1> <CENTER> <BR/> Délices des fruits et légumes </CENTER> </H1>

<BR/> <BR/> <BR/>

<TABLE WIDTH = 100%>

    <tr>

        <?php

        $pictures = array ("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQFT2YAIH6gvWVAgLdvvgjXWhoZegvv-w7ShB5ZsO1BPHbrM9Ek",
            "https://www.iterroir.fr/images/visuels-220/peche.jpg",
            "https://parismatch.be/app/uploads/2018/04/belgaimage-41339722-full-1-1100x715.jpg" ,

            "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTDIPZDpjMByhOktCdrSvoUPcoPOO3xGDpi491PpzUWyvlTSHHA" ,



           ) ;

        shuffle ($pictures) ; // Permet de charger une image aléatoire à l'aide de la fonction "shuffle()".

        for ($i = 0 ; $i < 3 ; $i ++)

        {

            echo "<td align = 'center'> <img src = \"" ;

            echo $pictures [$i] ;

            echo " \" width = '115' height = '115' </td>" ;

        }

        ?>

    </tr>

</TABLE>

</BODY>

</HTML>