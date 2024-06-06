const horibar= document.getElementById("modelImg");

const scrollLeftButton = document.getElementById("btPre");
const scrollRightButton = document.getElementById("btNext");


    scrollLeftButton.addEventListener("click", () => {
        horibar.scrollBy({
          top: 0,
          left: -200,
          behavior: "smooth",
        });
      });
      
      scrollRightButton.addEventListener("click", () => {
        horibar.scrollBy({
          top: 0,
          left: 200,
          behavior: "smooth",
        });
      });

      
const hightlight = document.getElementById("texth5");
var i=0;
var txt="Đội ngũ chuyên gia hàng đầu Việt Nam về AI tạo sinh";
var type="_";

function typing(){
  if(i<txt.length){
    hightlight.innerHTML +=txt.charAt(i);
    i++;
    setTimeout(typing,70)
  }
}
typing();




