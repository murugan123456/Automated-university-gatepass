fetch('analytics.php')
        .then(response => response.json())
        .then(data => {
            // Data received, create chart
            var chart1 = data.deptdata;
            var chart2 = data.yeardata;
            var chart3 = data.monthdata;
            // console.log(chart1);
            // console.log(chart2);
            //department
            var deptctx = document.getElementById('DeptChart').getContext('2d');
            var colors=[];
            var colors=[];
            var dept=[];
            var deptcount = [];
            for(var i in chart1){
                dept.push(chart1[i].DEPARTMENT);
                deptcount.push(chart1[i].DEPTCOUNT)
                colors.push(color());
            }
            var deptchart = new Chart(deptctx, {
                type: 'bar',
                data: {
                    labels: dept,
                    datasets: [{
                        label: 'Department Analytics',
                        data:deptcount,
                        backgroundColor: colors
                    }]
                },
                options: {
                    legend:{display:false},
                    title:{
                        text:"Department Analytics",
                        display:true
                    }
                }
            }); 
            //YEAR 
            var deptctx1 = document.getElementById('YearChart').getContext('2d');
            var yearc = [];
            var yearn = [];
            for(var J in chart2){
                yearn.push(chart2[J].YEAR);
                yearc.push(chart2[J].YEARCOUNT)
                colors.push(color());
            }

            var yearchart = new Chart(deptctx1, {
                type: 'bar',
                data: {
                    labels: yearn,
                    datasets: [{
                        label: 'Year Analytics',
                        data:yearc,
                        backgroundColor: colors
                    }]
                },
                options: {
                    legend:{display:false},
                    title:{
                        text:"YEAR Analytics",
                        display:true
                    }
                }
            }); 
            //MONTH
            var deptctx2 = document.getElementById('MonthChart').getContext('2d');
            var monthname = [];
            var monthnumber = [];

            for(var K in chart3){
                monthname.push(chart3[K].MONTH);
                monthnumber.push(chart3[K].MONTHTOTAL)
                colors.push(color());
            }
           var monthn = monthNumberToString(monthstring);
            var monthstring = parseInt(monthname);
            var monthchart1 = new Chart(deptctx2, {
                type: 'bar',
                data: {
                    labels:monthname,
                    datasets: [{
                        label: 'MONTH Analytics',
                        data:monthnumber,
                        backgroundColor: colors
                    }]
                },
                options: {
                    legend:{display:false},
                    title:{
                        text:"MONTH Analytics",
                        display:true
                    }
                }
            });
        });
 
function color(){
            var r = Math.floor(Math.random()*256);
            var g = Math.floor(Math.random()*256);
            var b = Math.floor(Math.random()*256);
            var rgba = "rgba("+r+","+g+","+b+"1.0)";
            return rgba;
}
 
function monthNumberToString(monthNumber) {
    // Create a Date object with any day in the desired month
    const date = new Date(2000, monthNumber - 1, 1);
    // Use toLocaleString() with appropriate options to get the month name
    const monthString = date.toLocaleString('default', { month: 'long' });
    return monthString;
}

// // Example usage
// console.log(monthNumberToString(1)); // Output: January
// console.log(monthNumberToString(2)); // Output: February