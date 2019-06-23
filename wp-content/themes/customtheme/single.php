<?php
/** 
 * The template for displaying
 * 
 * 
*/

get_header();
?>
<div class="banner">

    <button>
            <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.5039 45.1227C22.8372 45.5116 22 45.0308 22 44.259V19.741C22 18.9692 22.8372 18.4884 23.5039 18.8773L44.5192 31.1362C45.1807 31.5221 45.1807 32.4779 44.5192 32.8638L23.5039 45.1227Z" fill="#D6F5FF"/>
                </svg>                    
    </button>
    <div class="thumbnail">
        <img src="../assets/images/image.png" alt="thumbnail">
    </div>
    <video class="video"><source src="../assets/videos/video.mp4" type="video/mp4"></video>

    <div class="nav">     
        <svg class="justify-left" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.62132 11L11.5607 3.06066C12.1464 2.47487 12.1464 1.52513 11.5607 0.93934C10.9749 0.353553 10.0251 0.353553 9.43934 0.93934L0.43934 9.93934C-0.146447 10.5251 -0.146447 11.4749 0.43934 12.0607L9.43934 21.0607C10.0251 21.6464 10.9749 21.6464 11.5607 21.0607C12.1464 20.4749 12.1464 19.5251 11.5607 18.9393L3.62132 11Z" fill="white"></path>
        </svg>
        <svg class="justify-right" viewBox="0 0 17 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.42293 8.53131H1.02612V23.9656H15.9454V8.53131H10.5856" stroke="white" stroke-width="1.5"></path>
            <path d="M8.69288 1.32816L8.98751 1.03353L8.69288 0.7389L8.39825 1.03353L8.69288 1.32816ZM8.5 1.52104L8.20537 1.81567L8.5 2.11029L8.79463 1.81567L8.5 1.52104ZM9.28214 1.91741L9.57677 2.21204L9.87139 1.91741L9.57677 1.62278L9.28214 1.91741ZM9.08926 2.11029L8.79463 1.81567L8.5 2.11029L8.79463 2.40492L9.08926 2.11029ZM11.9196 4.94067L11.625 5.23529L11.625 5.23529L11.9196 4.94067ZM12.2143 5.23529L12.5089 5.52992L12.8035 5.23529L12.5089 4.94067L12.2143 5.23529ZM11.625 5.82455L11.3304 6.11918L11.625 6.4138L11.9196 6.11918L11.625 5.82455ZM11.3304 5.52992L11.0357 5.82455L11.0357 5.82455L11.3304 5.52992ZM8.9024 3.10195L9.19703 2.80732L8.48573 2.09603V3.10195H8.9024ZM8.9024 16.6651V17.0818H9.31907V16.6651H8.9024ZM8.06907 16.6651H7.6524V17.0818H8.06907V16.6651ZM8.06907 3.13048H8.48573V2.12456L7.77444 2.83585L8.06907 3.13048ZM5.66963 5.52992L5.375 5.23529L5.375 5.23529L5.66963 5.52992ZM5.375 5.82455L5.08037 6.11918L5.375 6.41381L5.66963 6.11918L5.375 5.82455ZM4.78574 5.23529L4.49112 4.94067L4.19649 5.23529L4.49112 5.52992L4.78574 5.23529ZM5.08037 4.94067L5.375 5.23529L5.375 5.23529L5.08037 4.94067ZM7.91074 2.11029L8.20537 2.40492L8.5 2.11029L8.20537 1.81567L7.91074 2.11029ZM7.89648 2.09603L7.60185 1.8014L7.30722 2.09603L7.60185 2.39066L7.89648 2.09603ZM8.48573 1.50677L8.78036 1.21214L8.48573 0.917518L8.19111 1.21215L8.48573 1.50677ZM8.39825 1.03353L8.20537 1.22641L8.79463 1.81567L8.98751 1.62278L8.39825 1.03353ZM9.57677 1.62278L8.98751 1.03353L8.39825 1.62278L8.98751 2.21204L9.57677 1.62278ZM9.38388 2.40492L9.57677 2.21204L8.98751 1.62278L8.79463 1.81567L9.38388 2.40492ZM12.2143 4.64604L9.38388 1.81567L8.79463 2.40492L11.625 5.23529L12.2143 4.64604ZM12.5089 4.94067L12.2143 4.64604L11.625 5.23529L11.9196 5.52992L12.5089 4.94067ZM11.9196 6.11918L12.5089 5.52992L11.9196 4.94067L11.3304 5.52992L11.9196 6.11918ZM11.0357 5.82455L11.3304 6.11918L11.9196 5.52992L11.625 5.23529L11.0357 5.82455ZM8.60777 3.39658L11.0357 5.82455L11.625 5.23529L9.19703 2.80732L8.60777 3.39658ZM9.31907 16.2485V3.10195H8.48573V16.2485H9.31907ZM9.31907 16.6651V16.2485H8.48573V16.6651H9.31907ZM8.06907 17.0818H8.9024V16.2485H8.06907V17.0818ZM7.6524 16.2485V16.6651H8.48573V16.2485H7.6524ZM7.6524 3.13048V16.2485H8.48573V3.13048H7.6524ZM5.96426 5.82455L8.3637 3.42511L7.77444 2.83585L5.375 5.23529L5.96426 5.82455ZM5.66963 6.11918L5.96426 5.82455L5.375 5.23529L5.08037 5.52992L5.66963 6.11918ZM4.49112 5.52992L5.08037 6.11918L5.66963 5.52992L5.08037 4.94067L4.49112 5.52992ZM4.78574 4.64604L4.49112 4.94067L5.08037 5.52992L5.375 5.23529L4.78574 4.64604ZM7.61612 1.81567L4.78574 4.64604L5.375 5.23529L8.20537 2.40492L7.61612 1.81567ZM7.60185 2.39066L7.61612 2.40492L8.20537 1.81567L8.19111 1.8014L7.60185 2.39066ZM8.19111 1.21215L7.60185 1.8014L8.19111 2.39066L8.78036 1.8014L8.19111 1.21215ZM8.79463 1.22641L8.78036 1.21214L8.19111 1.8014L8.20537 1.81567L8.79463 1.22641Z" fill="white"></path>
        </svg> 
        <svg class="justify-right" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 5.44269C11.1811 3.35888 8.887 1.83331 6.5 1.83331C3.39189 1.83331 1 4.15775 1 7.24738C1 11.4932 5.63589 14.7765 12 21.0833C18.3641 14.7765 23 11.4932 23 7.24738C23 4.15775 20.6081 1.83331 17.5 1.83331C15.1106 1.83331 12.8189 3.35888 12 5.44269Z" stroke="white" stroke-width="1.5"></path>
        </svg>  
    </div>

</div>

<section class="article">

    <div class="author">
        <img src="../assets/images/author.jpg" alt="author">
        <div class="author-info">
            <div class="author-name"><span>By Marc Curtis</span></div>
            <div class="date"><small>31 Oct 2019</small></div>
        </div>
    </div>

    <div class="article-title title">
        <h2>The Different Types Of Laser Eye Surgery</h2>
        <div class="underline"></div>
    </div>

    <div class="article-content content">
        <p>The LASIK surgeon uses computer software to guide the IntraLase laser beam, which applies a series of tiny (3-micron-diameter) bubbles within the central layer of the cornea. The resulting corneal flap is created at a precise depth and diameter pre-determined by the surgeon. As occurs with a mechanical microkeratome, a small section of tissue at one edge of the flap is left uncut, forming a hinge.</p>
        <img src="../assets/images/postpic.png" alt="post pic">
        <p>The LASIK surgeon uses computer software to guide the IntraLase laser beam, which applies a series of tiny (3-micron-diameter) bubbles within the central layer of the cornea. The resulting corneal flap is created at a precise depth and diameter pre-determined by the surgeon. As occurs with a mechanical microkeratome, a small section of tissue at one edge of the flap is left uncut, forming a hinge.</p>
    </div>

    <div class="more">
        <h3>Cellulite Treatment Options</h3>
        <div class="sidescroll">
            <img src="../assets/images/more1.png" alt="more">
            <img src="../assets/images/more2.png" alt="more">
            <img src="../assets/images/more3.png" alt="more">
        </div>
    </div>

    <div class="comments">

    <div class="title"><h2>Comments (40) </h2></div>
    <div class="underline"></div>

    <div class="author">
        <img src="../assets/images/author.jpg" alt="author">
        <div class="author-info">
            <div class="author-wrap">
                <div class="author-name"><span>Marc Curtis</span></div>
                <svg width="24" height="6" viewBox="0 0 24 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 3C6 4.657 4.657 6 3 6C1.343 6 0 4.657 0 3C0 1.343 1.343 0 3 0C4.657 0 6 1.343 6 3ZM15 3C15 4.657 13.657 6 12 6C10.343 6 9 4.657 9 3C9 1.343 10.343 0 12 0C13.657 0 15 1.343 15 3ZM21 6C22.657 6 24 4.657 24 3C24 1.343 22.657 0 21 0C19.343 0 18 1.343 18 3C18 4.657 19.343 6 21 6Z" fill="#757675"/>
                </svg>
            </div>
            <div class="date"><small>31 Oct 2019</small></div>               
        </div>
    </div> 
    <div class="content">
        <p>I have found some valuable resources for us to use and publisize, all of which are dedicated to responsible travel and care of our environment.</p>
    </div>

    <div class="author">
        <img src="../assets/images/author.jpg" alt="author">
        <div class="author-info">
            <div class="author-wrap">
                <div class="author-name"><span>Marc Curtis</span></div>
                <svg width="24" height="6" viewBox="0 0 24 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 3C6 4.657 4.657 6 3 6C1.343 6 0 4.657 0 3C0 1.343 1.343 0 3 0C4.657 0 6 1.343 6 3ZM15 3C15 4.657 13.657 6 12 6C10.343 6 9 4.657 9 3C9 1.343 10.343 0 12 0C13.657 0 15 1.343 15 3ZM21 6C22.657 6 24 4.657 24 3C24 1.343 22.657 0 21 0C19.343 0 18 1.343 18 3C18 4.657 19.343 6 21 6Z" fill="#757675"/>
                </svg>
            </div>
            <div class="date"><small>31 Oct 2019</small></div>               
        </div>
    </div> 
    <div class="content">
        <p>I have found some valuable resources for us to use and publisize, all of which are dedicated to responsible travel and care of our environment.</p>
    </div>

    <div class="author">
        <img src="../assets/images/author.jpg" alt="author">
        <div class="author-info">
            <div class="author-wrap">
                <div class="author-name"><span>Marc Curtis</span></div>
                <button>
                    <svg width="24" height="6" viewBox="0 0 24 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 3C6 4.657 4.657 6 3 6C1.343 6 0 4.657 0 3C0 1.343 1.343 0 3 0C4.657 0 6 1.343 6 3ZM15 3C15 4.657 13.657 6 12 6C10.343 6 9 4.657 9 3C9 1.343 10.343 0 12 0C13.657 0 15 1.343 15 3ZM21 6C22.657 6 24 4.657 24 3C24 1.343 22.657 0 21 0C19.343 0 18 1.343 18 3C18 4.657 19.343 6 21 6Z" fill="#757675"/>
                    </svg>
                </button> 
            </div>
            <div class="date"><small>31 Oct 2019</small></div>               
        </div>
    </div> 
    <div class="content">
        <p>If you are looking for a unique way to spend your summer vacation this year, then consider it no further. </p>
    </div>

    <div class="comments-menu">
        <button><a href=" #">Show all...</a></button>
        <button><a href=" #">Add a comment +</a></button>
    </div>
    </div>

    <div class="other">

    <div class="title"><h2>Other Articles</h2></div>
    <div class="underline"></div>

    <div class="wraps">
        <div class="other-wrap">
            <div class="flex">
                <div class="other-title"><h3>What Are The Lasik Procedures</h3></div>
                <div class="author"><span>By Eliza McCoy</span></div>
                <div class="date"><small>25 Dec 2019</small></div>
            </div>
            <div class="other-img">
                <img src="../assets/images/other1.png" alt="other-img">
                <div class="background other1"></div>
            </div>
        </div>

        <div class="other-wrap">
            <div class="flex">
                <div class="other-title"><h3>What Are The Lasik Procedures</h3></div>
                <div class="author"><span>By Eliza McCoy</span></div>
                <div class="date"><small>25 Dec 2019</small></div>
            </div>
            <div class="other-img">
                <img src="../assets/images/other2.png" alt="other-img">
                <div class="background other2"></div>
            </div>
        </div>

        <div class="other-wrap">
            <div class="flex">
                <div class="other-title"><h3>What Are The Lasik Procedures</h3></div>
                <div class="author"><span>By Eliza McCoy</span></div>
                <div class="date"><small>25 Dec 2019</small></div>
            </div>
            <div class="other-img">
                <img src="../assets/images/other3.png" alt="other-img">
                <div class="background other3"></div>
            </div>
        </div>
    </div>

    </div>

</section>


<?php get_footer();?>