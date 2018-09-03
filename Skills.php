<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 4/6/2017
 * Time: 9:47 PM
 */

include('template/header.php');
?>

<div class="well">
    <h1>Skills</h1>
    <p>Here I outline a few of the different things I'm good at. If you want to see things I'm currently working on, visit <a href="http://www.jackschaible.ca/blog/category/projects/" target="_blank">this page</a>.</p>
</div>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Web Development
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <p>Probably my strongest area, I've worked with numerous languages and frameworks. See below!</p>
                <p><strong>Client-Side</strong></p>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>jQuery</li>
                    <li>Bootstrap</li>
                    <li>FontAwesome</li>
                </ul>
                <p><strong>Server-Side</strong></p>
                <ul>
                    <li>ASP.NET (Web Forms, MVC)</li>
                    <li>Laravel</li>
                    <li>PHP</li>
                </ul>
                <p><strong>Database</strong></p>
                <ul>
                    <li>Microsoft SQL (T-SQL)</li>
                    <li>MySql</li>
                    <li>Sqlite</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    App Development
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <p>Although my preferred method for building mobile apps is to have an embedded web browser with minimalist functions client-side, that simply relays information
                    stored on the server (it speeds up development and deployment across platforms), I <em>am</em> proficient with the following:</p>
                <ul>
                    <li>Android/Java</li>
                    <li>iOS/Objective-C</li>
                    <li>Windows/C#</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Analysis
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                <p>Part of every developer's job involved a piece of analysis. There are multiple tools available that aid with these tasks, however I find the most useful
                    to be <strong>UML diagramming</strong> (Use Case models, Data Flow Diagrams, Sequence Diagrams, Entity-Relationship Diagrams, Class Diagrams, State Diagrams, etc.). However,
                    most good Agile developers (like myself) make minimal use of diagramming, opting instead for short, iterative pushes that we can improve upon as we go.</p>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Design
                </a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-body">
                <p>Most of the design I do goes in conjunction with the planning/analysis section I mentioned earlier. To that end, I'm proficient with Microsoft Visio
                    for diagram creation. A nice, free alternative is <a href="www.draw.io" target="_blank">draw.io</a>, which I use frequently, too. When it comes to
                    asset creation, however, nothing beats the power and flexibility of <strong>Photoshop</strong> and <strong>Illustrator</strong>.</p>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFive">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Administration
                </a>
            </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
            <div class="panel-body">
                <p>While building things may be the most time-consuming (and possibly fun) part of app development, it doesn't end there. Servers need to be configured, deployment
                    packages created, support maintained, etc. I have quite a bit of experience managing <strong>IIS</strong> servers, including Microsoft SQL database servers to
                    go along with it. I also have experience building <strong>Apache</strong> web servers, working with MySql and PHP.</p>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSix">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Game Development
                </a>
            </h4>
        </div>
        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
            <div class="panel-body">
                <p>Games are by far my favorite projects to work on. I learned programming using C# and <strong>XNA</strong>, and I strongly believe that games are the best types
                    of projects for new developers. They incorporate every aspect of a computer; graphics, logic, input, audio, networking, and more. If you can make a full-fledged
                    game, you should be well-prepared for most programming tasks that await you. I've also used <strong>Unity</strong> in making games, and I've dabbled in plain
                    <strong>DirectX</strong>, as well.</p>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSeven">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Other Various "Soft" Skills
                </a>
            </h4>
        </div>
        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
            <div class="panel-body">
                <p>By now, most of this has probably been mentioned, but I've led small teams of developers. At Coupons4Giving I had a designer and 3 remote developers working
                    with me. At Riva, I had 3 developers and 4 QA testers. So team and people management is something I've learned to do. The most useful tool I have for that
                    is <strong>SCRUM</strong>. I like my SCRUM iterations to be a bit shorter, usually 1 week. I find this keeps the development fast-paced and keeps momentum
                    going. Of course, SCRUM is different for every team and every organization, but a good SCRUM master knows how to adapt, and make it work with anyone.</p>
            </div>
        </div>
    </div>
</div>

<?php
include('template/footer.php')
?>
