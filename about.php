<?php
$birthDate = "10/24/1996";
$birthDate = explode("/", $birthDate);
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
?>

<section id="about">
    <div class="inner">

        <h1>About me.</h1>
        <p class="lead">I'm <?php echo $age; ?> y.o. Russian girl living in Prague, Czech Republic studying Open Informatics program at Czech Technical University.</p>
        <p class="lead">I make websites (check out my <a href="#projects" class="page-scroll">projects</a> below), edit pictures (check out my works on <a href="//www.flickr.com/photos/anastasia_surikova/" target="_blank">flickr</a>) and do a lot of other useful computer stuff.</p>
        <p class="lead">Currently I work as a front-end developer in the <a href="//dalten.cz" target="_blank" class="page-scroll">Dalten Media</a>.
        <p class="lead">I was born in Volgograd, Russia on October 24th, 1996. I have been interested in computers since my childhood. At the age of 14 I began to discover a process of website developing and that's what I've been doing until today.</p>
        <div class="row">
            <div class="col-md-6">
                <h2>Work experience:</h2>
                <ul>
                    <li><p><a href="//dalten.cz" target="_blank">Dalten Media</a></p><p>as a front-end developer</p></li>
                    <li><p><a href="//pensioncorto.cz" target="_blank">Pension Corto</a></p><p>as a receptionist</p></li>
                    <li><p><a href="//rezidencevysehrad.cz" target="_blank">Rezidence Vyšehrad</a></p><p>also as a receptionist</p></li>
                    <li><p><a href="//webnow.cz" target="_blank">Webnow.cz</a></p><p>as a project manager</p></li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Education:</h2>
                <ul>
                    <li>
                        <p><a href="//cvut.cz" target="_blank">ČVUT</a></p>
                        <p>2016 till now<br>
                            faculty of electrical engineering</p>
                    </li>
                    <li>
                        <p><a href="//vosaspsekrizik.cz/" target="_blank">VOŠ a SPŠE F. Křižíka</a></p>
                        <p>2012 - 2016<br>
                            IT specialization in electro</p>
                    </li>
                    <li>
                        <p><a href="//sch93.ru" target="_blank">Primary school #93</a></p>
                        <p>2003 - 2012<br>Volgograd, Russia</p>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>