// https://stackoverflow.com/questions/54814637/javascript-difference-between-curly-brackets-and-square-brackets

//Let's updatedDataSet[] be the array to hold the updated data set with every update call
var updatedDataSet;

const ctx = document.getElementById('myChart').getContext('2d');

// =====> Setup <=====
const data = {
    labels: [
      'Price',
      'Quality',
      'Customer Service',
      'Convenience',
      'Marketing',
      'After Sales Service'
    ],
    
    datasets: [
                {
                label: 'You',
                data: [48, 40, 75, 100, 27, 33],
                fill: true,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgb(255, 255, 255)',
                pointBackgroundColor: 'rgb(255, 255, 255)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)'
               },
               {
                label: 'Competitor',
                data: [59, 90, 45, 56, 65, 100],
                fill: true,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgb(54, 162, 235)',
                pointBackgroundColor: 'rgb(54, 162, 235)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(54, 162, 235)'
               }
             ]
  };
// =====> Setup <=====


// =====> Configuration <=====  
const chart = new Chart(ctx, {
    type: 'radar',
    data: data,
    options: {

                elements: {
                    line: {
                    borderWidth: 3
                    }
                },

                //https://stackoverflow.com/questions/67300746/radar-chart-chart-js-v3-2-labels-customization
                scales: {
                    r: {
                        pointLabels: {
                                color: 'white'
                        },
                // https://stackoverflow.com/questions/60789217/chartjs-radar-chart-radar-lines-color        
                        grid: {
                                color: "white",
                        },
                        }
                },

                // https://www.chartjs.org/docs/latest/configuration/legend.html
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            color: 'rgb(255, 255, 255)'
                        }
                    }
                }                
      
    },    
    
});



// =====> Configuration <=====  

// These sentences below are an attempt to find a solution to a problem, the problem being able to update or push a specific object when you have several objects inside an array
// Add item to the first object inside an array of objects
// Get first element in an array of object by index 
// push updates the last object and not the first javascript
// push only updates the last object javascript
//loop through array of objects javascript - https://stackoverflow.com/questions/16626735/how-to-loop-through-an-array-containing-objects-and-access-their-properties - the answer with 246 votes

// https://stackoverflow.com/questions/51766019/get-first-element-in-an-array-of-object-by-index

// https://stackoverflow.com/questions/17354163/dynamically-update-values-of-a-chartjs-chart - the answer with 5 votes

/*Function to update the bar chart*/
function updateGraph(chart, label, color,borderColor, data,data2) {

    // chart.data.datasets.pop();
    // chart.data.datasets.push({
    //   label: label,
    //   backgroundColor: color,
    //   borderColor: borderColor,
    //   data: data
    // });   

    // chart.update();

    // https://stackoverflow.com/questions/16626735/how-to-loop-through-an-array-containing-objects-and-access-their-properties - the answer with 246 votes
    chart.data.datasets.forEach((element,index,array) => {

        console.log('Element: ' + element.label);
            //Element: 18-30
            //Element: 31-43

        console.log('Index: ' + index);        

        console.log('Data Set Array: ' + array.data);
            // Data Set Array: 48,40,75,100,27,33
            // Data Set Array: 59,90,45,56,65,70

    

        console.log('Array Length: ' + chart.data.datasets.length); 
            //2

        // array[index].data = data;
            // the problem with this is that both datasets are being udpated with the same exact information and therefore the graph looks the same each time it changes

        array[0].data = data;
        array[1].data = data2;

    });

    chart.update();

    console.log(chart.data.datasets[0].label); //18-30
    console.log(chart.data.datasets[1].label); //31-43

}


/*Updating the bar chart with updated data in every second. */
setInterval(function() {

    // https://stackoverflow.com/questions/2380019/generate-unique-random-numbers-between-1-and-100 - the answer with 223 votes
    var arr = [];
    var arr2 = []; //Instead of having another array we could take arr and reorder or randomize the value inside of it

    while(arr.length < 6){

        var r = Math.floor(Math.random() * 100) + 1;
        if(arr.indexOf(r) === -1) arr.push(r);

        var r2 = Math.floor(Math.random() * 100) + 1;
        if(arr2.indexOf(r2) === -1) arr2.push(r2);

    }

    console.log(arr);
    console.log(arr2);

    updatedDataSet = [arr[0], arr[1], arr[2], arr[3], arr[4], arr[5]];
    updatedDataSet2 = [arr2[0], arr2[1], arr2[2], arr2[3], arr2[4], arr2[5]];

    updateGraph(chart, '31-43', 'rgba(54, 162, 235, 0.2)', 'rgb(54, 162, 235)', updatedDataSet,updatedDataSet2);

}, 3000);