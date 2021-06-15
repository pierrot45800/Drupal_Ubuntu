
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
  type: 'line',
  data: {
  //labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
  datasets: [{
  label: '# of Votes',
  //data: [12, 19, 3, 5, 2, 3],
    data: [{x:'2016-12-25', y:20},{x:'2016-12-26', y:10}],
  backgroundColor: [
  'rgba(255, 99, 132, 0.2)',
  'rgba(54, 162, 235, 0.2)',
  'rgba(255, 206, 86, 0.2)',
  'rgba(75, 192, 192, 0.2)',
  'rgba(153, 102, 255, 0.2)',
  'rgba(255, 159, 64, 0.2)'
  ],
  borderColor: [
  'rgba(255, 99, 132, 1)',
  'rgba(54, 162, 235, 1)',
  'rgba(255, 206, 86, 1)',
  'rgba(75, 192, 192, 1)',
  'rgba(153, 102, 255, 1)',
  'rgba(255, 159, 64, 1)'
  ],
  borderWidth: 2,
    hoverOffset: 30
}]
},
  options: {
  scales: {
  y: {
  beginAtZero: true
}
}
}
});
/*
  $("test").onclick(function (){
    alert("bonjour");

  });
*/
/*
  document.getElementById("test").onclick(function (){
    alert("bonjour");

  });
*/

  $( "input" ).click(
    function() {
      alert("bonjour");
    }
  );






































