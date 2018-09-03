<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 4/6/2017
 * Time: 12:18 PM
 */
include('template/header.php');
?>

<div class="jumbotron">
    <h1>Jack Schaible's Profile Site</h1>
    <p>Welcome to my profile site. While you're here, why don't you check out <a href="/Skills.php">what I can do</a> or <a href="/Projects.php">what I'm working on/what I've done</a>? Or,
        you could take a look at one of my profiles. I also have a blog <a href="http://www.jackschaible.ca/blog">here</a>, if you want to check that out!</p>
    <div class="text-center">
        <ul class="list-inline lead">
            <li><a title="GitHub" href="https://github.com/JackSchaible" target="_blank"><i class="fa fa-github-alt"></i> GitHub</a></li>
            <li><a title="Linked In" href="https://www.linkedin.com/in/jack-schaible-352a1631/" target="_blank"><i class="fa fa-linkedin"></i> Linked In</a></li>
            <li><a title="StackOverflow" href="http://stackoverflow.com/users/945604/jack" target="_blank"><i class="fa fa-stack-overflow"></i> StackOverflow</a></li>
        </ul>
    </div>
</div>
<div class="col-xs-6">
    <div class="well">
        <p><strong>New & Favorite Projects</strong></p>
        <ul>
            <li><a target="_blank" href="http://www.jackschaible.ca/blog/category/ffe/">FastForward Express</a></li>
            <li><a target="_blank" href="http://www.jackschaible.ca/blog/category/fleetcom/">Fleetcom v3</a></li>
            <li><a target="_blank" href="http://www.jackschaible.ca/blog/category/profile/">This Site</a></li>
            <li><a target="_blank" href="http://www.jackschaible.ca/blog/category/school/">School!</a></li>
        </ul>
    </div>
</div>

<div class="col-xs-6">
    <div class="well">
        <p><strong>News</strong></p>
        <p id="loadingIcon"><i class="fa fa-spinner fa-spin fa-2x"></i></p>
        <ul id="blog"></ul>
    </div>
</div>

<?php
include('template/footer.php')
?>

<script type="text/javascript">
    $(document).ready(function(){
        $.ajax({
            url: 'http://www.jackschaible.ca/blog/wp-json/wp/v2/posts',
            type: 'GET',
            success: function(e){
                var posts = e;

                for (index = 0; index < 3; ++index){
                    $("#blog").append('<li><a target="_blank" href="' + posts[index].link + '">' + posts[index].title.rendered + '</a></li>');
                }
            },
            error: function(){
                $("#blog").append('<li class="text-warning"><i class="fa fa-warning"></i> There was an error retrieving blog posts.</li>');
            },
            complete: function(){
                $("#loadingIcon").remove();
            }
        }) ;
    });
</script>
