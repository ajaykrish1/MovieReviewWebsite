custom_bttn=document.querySelector("#Movie_button");
default_bttn=document.querySelector("#image");
custom_txt=document.querySelector("#custom_text");
input=document.querySelectorAll(".star-wrapper input");
label=document.querySelectorAll(".star-wrapper label");

custom_bttn.addEventListener("click",function()
{
  default_bttn.click();


});

default_bttn.addEventListener("change",function()
{
  custom_txt.textContent=default_bttn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];

});


label[0].addEventListener("mouseover",function()
  {
    for(i=0;i<1;i++)
    {

    label[i].classList.add("hover");

    }
  });
  label[0].addEventListener("mouseout",function()
  {
    for(i=0;i<1;i++)
    {

    label[i].classList.remove("hover");

    }
  });
  label[1].addEventListener("mouseover",function()
  {
    for(i=0;i<2;i++)
    {

    label[i].classList.add("hover");

    }
  });
  label[1].addEventListener("mouseout",function()
  {
    for(i=0;i<2;i++)
    {

    label[i].classList.remove("hover");

    }
  });
  label[2].addEventListener("mouseover",function()
  {
    for(i=0;i<3;i++)
    {

    label[i].classList.add("hover");

    }
  });
  label[2].addEventListener("mouseout",function()
  {
    for(i=0;i<3;i++)
    {

    label[i].classList.remove("hover");

    }
  });
  label[3].addEventListener("mouseover",function()
  {
    for(i=0;i<4;i++)
    {

    label[i].classList.add("hover");

    }
  });
  label[3].addEventListener("mouseout",function()
  {
    for(i=0;i<4;i++)
    {

    label[i].classList.remove("hover");

    }
  });
  label[4].addEventListener("mouseover",function()
  {
    for(i=0;i<5;i++)
    {

    label[i].classList.add("hover");

    }
  });
  label[4].addEventListener("mouseout",function()
  {
    for(i=0;i<5;i++)
    {

    label[i].classList.remove("hover");

    }
  });



label[0].addEventListener("click",star1);

label[1].addEventListener("click",star2);

label[2].addEventListener("click",star3);

label[3].addEventListener("click",star4);


label[4].addEventListener("click",star5);



  function star1()
  {

    for(i=0;i<5;i++)
    {
      label[i].classList.remove("new");
    }
    for(i=0;i<1;i++)
    {

    label[i].classList.toggle("new");

    }
    if (document.getElementById('star-1').checked) {
  rate_value = document.getElementById('star-1').value;
  alert(rate_value);
}

  }


  function star2()
  {
    for(i=0;i<5;i++)
    {
      label[i].classList.remove("new");
    }
    for(i=0;i<2;i++)
    {

    label[i].classList.toggle("new");

    }
  }
  function star3()
  {
    for(i=0;i<5;i++)
    {
      label[i].classList.remove("new");
    }
    for(i=0;i<3;i++)
    {

    label[i].classList.toggle("new");

    }
  }
  function star4()
  {
    for(i=0;i<5;i++)
    {
      label[i].classList.remove("new");
    }
    for(i=0;i<4;i++)
    {

    label[i].classList.toggle("new");

    }
  }
  function star5()
  {
    for(i=0;i<5;i++)
    {
      label[i].classList.remove("new");
    }
    for(i=0;i<5;i++)
    {

    label[i].classList.toggle("new");

    }
  }


