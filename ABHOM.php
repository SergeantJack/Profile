<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 4/6/2017
 * Time: 9:44 PM
 */

include('template/header.php');
?>

<div class="well">
    <h1>A Brief History of Me</h1>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Early Childhood
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <p>Not much to say here. I was born in 1989 in Edmonton. I had a fairly normal family life. I'm inclined not to go into too many details here, but if you're a friend, you already know this stuff.</p>
                    <p>Hey, I said it was <em>brief</em>!</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Teenager
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    <p>I hated most of my teen years, and again, the internet as a whole doesn't <em>really</em> need to know why.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Modern Times (2010+)
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                    <p>This is where things get interesting and relevant anyways.</p>
                    <p>I began my post-secondary education at the <a target="_blank" href="http://www.nait.ca">Northern Alberta Institute of Technology</a>. I completed by diploma in
                        <a target="_blank" href="http://www.nait.ca/program_home_78110.htm">Digital Media and IT</a> in 2013. One of the last courses I took there was the capstone project,
                        where we were to design and build an application for an existing, real-world client. Due to a combination of really terrible groupmates, a ton of hard work, and
                        more than a bit of luck, I was hired to work for that client, as I stood out amongst my groupmates as being reliable and hardworking.</p>
                    <p>I began working for a startup company <a href="">GenerUs/BGenerus/Coupons4Giving</a> (we went through a few names). The idea was to get coupons from merchant partners
                        and give them to non-profit organizations, who would then go sell the coupons, and we would take a small cut of the sales. Although I'm not sure what eventually became
                        of the company, I realized that startup life was hard, and much more suited to those who had significant existing financial backing. I left the company in the summer
                        of 2014.</p>
                    <p>I continued my career at <a target="_blank" href="http://www.rivacrmintegration.com/">Riva CRM Integration</a>, where I worked with an extremely fast-paced and exciting
                        company. I worked on and developed the <a href="http://www.rivacrmintegration.com/insight/">Riva Insight</a> product, which allows you to bring up context-specific
                        CRM data from within Microsoft Outlook or IBM Notes. Though a nondisclosure agreement limits what I can say about the products, I can say that working there was
                        never boring. I ultimately decided to leave the company in December 2016, because I wanted to further my education.</p>
                    <p>With only a DMIT diploma, and so much more out there to learn, I decided to put my career on hold and go back to school. In January 2017, I started my Bachelor's Degree,
                        majoring in Computer Science and minoring in Physics. Since going back to school, I've been so much happier and am definitely convinced it was the right move. As I continue
                        on my life's journey, I will periodically update this section, but stay tuned to <a target="_blank" href="http://www.jackschaible.ca/blog">my blog</a> for more recent updates!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('template/footer.php')
?>
