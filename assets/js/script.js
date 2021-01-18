new Cleave('.birthday', {
    date: true,
    datePattern: ['d','m','Y'],
    dateMin: '1920-01-01',
    dateMax: '2020-12-31',
});
function mp() {
    var x = document.getElementById("pass");
    
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    } 
  }
  function rmp(){
    var y = document.getElementById("rePass")
    if (y.type === "password") {
        y.type = "text";
      } else {
        y.type = "password";
      }
  }