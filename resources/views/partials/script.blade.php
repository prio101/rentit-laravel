@section('script')
<script>
    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

    var Script = function () {

        var carsLuxary = {{$carsLuxary}};
        var carsMiddle ={{$carsMiddle}} ;
        var carsComfort = {{$carsComfort}} ;
        var doughnutData = [
            {
                value: carsLuxary,
                color:"#F7464A",
                highlight: "#FF5A5E",
                label: "Luxary"
            },
            {
                value : carsMiddle,

                color : "#2ecc71",
                label: "Comfort"
            },
            {
                value : carsComfort,
                color : "#3498db",
                label: "Middle"
            }

        ];
        var lineChartData = {
            labels : ["","","","","","",""],
            datasets : [
                {
                    fillColor : "rgba(220,220,220,0.5)",
                    strokeColor : "rgba(220,220,220,1)",
                    pointColor : "rgba(220,220,220,1)",
                    pointStrokeColor : "#fff",
                    data : [65,59,90,81,56,55,40]
                },
                {
                    fillColor : "rgba(151,187,205,0.5)",
                    strokeColor : "rgba(151,187,205,1)",
                    pointColor : "rgba(151,187,205,1)",
                    pointStrokeColor : "#fff",
                    data : [28,48,40,19,96,27,100]
                }
            ]

        };
        var pieData = [
            {
                value: 30,
                color:"#1abc9c"

            },
            {
                value : 50,
                color : "#16a085"
            },
            {
                value : 100,
                color : "#27ae60"
            }

        ];
        var barChartData = {
            labels : ["January","February","March","April","May","June","July"],
            datasets : [
                {
                    fillColor : "rgba(220,220,220,0.5)",
                    strokeColor : "rgba(220,220,220,1)",
                    data : [65,59,90,81,56,55,40]
                },
                {
                    fillColor : "rgba(151,187,205,0.5)",
                    strokeColor : "rgba(151,187,205,1)",
                    data : [28,48,40,19,96,27,100]
                }
            ]

        };
        var chartData = [
            {
                value : Math.random(),
                color: "#D97041"
            },
            {
                value : Math.random(),
                color: "#C7604C"
            },
            {
                value : Math.random(),
                color: "#21323D"
            },
            {
                value : Math.random(),
                color: "#9D9B7F"
            },
            {
                value : Math.random(),
                color: "#7D4F6D"
            },
            {
                value : Math.random(),
                color: "#584A5E"
            }
        ];
        var radarChartData = {
            labels : ["Dhaka","Chittagong","Rajshahi","Syllet","Barisal","Rangpur","Kumilla"],
            datasets : [
                {
                    fillColor : "rgba(220,220,220,0.5)",
                    strokeColor : "rgba(220,220,220,1)",
                    pointColor : "rgba(220,220,220,1)",
                    pointStrokeColor : "#fff",
                    data : [65,59,90,81,56,55,40]
                },
                {
                    fillColor : "rgba(151,187,205,0.5)",
                    strokeColor : "rgba(151,187,205,1)",
                    pointColor : "rgba(151,187,205,1)",
                    pointStrokeColor : "#fff",
                    data : [28,48,40,19,96,27,100]
                }
            ]

        };
        new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
        new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
        new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);

        new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
        new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);


    }();
</script>

@stop