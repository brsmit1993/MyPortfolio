const links = document.querySelectorAll('.links');
const sections = document.querySelectorAll('.section');

function changeLinkState() {
    let index = sections.length;

    while (--index && window.scrollY + 200 < sections[index].offsetTop) { }

    links.forEach((link) => link.classList.remove('active'));
    links[index].classList.add('active');
}

changeLinkState();
window.addEventListener('scroll', changeLinkState);

function goHome()
{

    var scrollDiv = document.getElementById("HomeDiv").offsetTop;
    window.scrollTo({ top: scrollDiv - 70, behavior: 'smooth' });
  

}

function goAboutMe()
{
   
    var scrollDiv = document.getElementById("AboutMeDiv").offsetTop;
    window.scrollTo({ top: scrollDiv - 70, behavior: 'smooth' });
   
}

function goPortfolio()
{

    var scrollDiv = document.getElementById("MyPortfolioDiv").offsetTop;
    window.scrollTo({ top: scrollDiv - 70, behavior: 'smooth' });
    return false;

}

function goContactMe()
{

    var scrollDiv = document.getElementById("ContactMeDiv").offsetTop;
    window.scrollTo({ top: scrollDiv - 70, behavior: 'smooth' });
    return false;

}

function findPos(obj) {
    var curtop = 0;
    if (obj.offsetParent) {
        do {
            curtop += obj.offsetTop;
        } while (obj = obj.offsetParent);
        return [curtop];
    }
}
