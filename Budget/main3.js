const Fertilizers=document.querySelector('.total-input');
const Manure=document.querySelector('.expenses-input');
const Seeds=document.querySelector('.stat-input');
const Tools=document.querySelector('.res-input');
const Miscelleneous=document.querySelector('.mis-input');


const ctx=document.getElementById('mychart').getContext('2d');
let mychart= new Chart(ctx,{

    type:'pie',
    data:{
        labels:['Fertilizers','Manure','Seeds','Tools','Miscelleneous'],
        datasets:[
            {
                label:'# of votes',
                data:[0,0,0,0,0],
                backgroundColor:['#2adece','#dd3b79','#ff766b','#e69b00','#ff07f'],
                borderWidth:1
            }

        ]
    },
    options: {
        title: {
          display: true,
          text: "Pie Chart"
        }
      }
});
const ctx2=document.getElementById('mychart2').getContext('2d');
let mychart2= new Chart(ctx2,{

    type:'bar',
    data:{
        labels:['Fertilizers','Manure','Seeds','Tools','Miscelleneous'],
        datasets:[
            {
                data:[0,0,0,0,0],
                backgroundColor:['#2adece','#dd3b79','#ff766b','#e69b00','#ff07f'],
                
            }

        ]
    },
    options: {
        legend: {display: false},
        title: {
          display: true,
          text: "Bar Chart"
        }
      }
});

const updateChartValue=(input,dataOrder)=>{
    input.addEventListener('change',e=>{
        mychart.data.datasets[0].data[dataOrder]=e.target.value;
        mychart.update();
        mychart2.data.datasets[0].data[dataOrder]=e.target.value;
        mychart2.update();
    });
};

updateChartValue(Fertilizers,0);
updateChartValue(Manure,1);
updateChartValue(Seeds,2);
updateChartValue(Tools,3);
updateChartValue(Miscelleneous,4);