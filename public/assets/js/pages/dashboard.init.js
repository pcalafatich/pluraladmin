!function(){function e(e){if(null!==document.getElementById(e)){var t=document.getElementById(e).getAttribute("data-colors");return(t=JSON.parse(t)).map((function(e){var t=e.replace(" ","");if(-1==t.indexOf("--"))return t;var r=getComputedStyle(document.documentElement).getPropertyValue(t);return r||void 0}))}}var t={series:[{data:[2,36,22,30,12,38]}],chart:{type:"line",height:61,sparkline:{enabled:!0}},colors:r=e("mini-1"),stroke:{curve:"smooth",width:2.5},tooltip:{fixed:{enabled:!1},x:{show:!1},y:{title:{formatter:function(e){return""}}},marker:{show:!1}}};new ApexCharts(document.querySelector("#mini-1"),t).render();t={series:[{data:[36,12,30,20,36,14]}],chart:{type:"line",height:61,sparkline:{enabled:!0}},colors:r=e("mini-2"),stroke:{curve:"smooth",width:2.5},tooltip:{fixed:{enabled:!1},x:{show:!1},y:{title:{formatter:function(e){return""}}},marker:{show:!1}}};new ApexCharts(document.querySelector("#mini-2"),t).render();t={series:[{data:[14,40,14,46,28,38]}],chart:{type:"line",height:61,sparkline:{enabled:!0}},colors:r=e("mini-3"),stroke:{curve:"smooth",width:2.5},tooltip:{fixed:{enabled:!1},x:{show:!1},y:{title:{formatter:function(e){return""}}},marker:{show:!1}}};new ApexCharts(document.querySelector("#mini-3"),t).render();t={series:[{data:[34,2,30,12,35,20]}],chart:{type:"line",height:61,sparkline:{enabled:!0}},colors:r=e("mini-4"),stroke:{curve:"smooth",width:2.5},tooltip:{fixed:{enabled:!1},x:{show:!1},y:{title:{formatter:function(e){return""}}},marker:{show:!1}}};new ApexCharts(document.querySelector("#mini-4"),t).render();t={series:[{data:[7,11,15,20,18,23,17,20,22,19]}],chart:{toolbar:{show:!1},height:350,type:"bar",events:{click:function(e,t,r){}}},plotOptions:{bar:{columnWidth:"70%",distributed:!0}},dataLabels:{enabled:!1},legend:{show:!1},colors:r=e("sales-statistics"),xaxis:{categories:["Jan","Feb","Mar","Apr","May","jun","Jul","Aug","Sep","Oct"],labels:{style:{colors:r,fontSize:"12px"}}}};new ApexCharts(document.querySelector("#sales-statistics"),t).render();var r=e("earning-item");t={series:[{data:[{x:"Iphone",y:[new Date("2021-10-02").getTime(),new Date("2021-10-10").getTime()],fillColor:r[0]},{x:"Android",y:[new Date("2021-10-12").getTime(),new Date("2021-10-21").getTime()],fillColor:r[1]},{x:"Watch 8",y:[new Date("2021-10-06").getTime(),new Date("2021-10-16").getTime()],fillColor:r[0]},{x:"Books",y:[new Date("2021-10-12").getTime(),new Date("2021-10-22").getTime()],fillColor:r[1]},{x:"Speaker",y:[new Date("2021-10-05").getTime(),new Date("2021-10-16").getTime()],fillColor:r[0]},{x:"Cover",y:[new Date("2021-10-17").getTime(),new Date("2021-10-26").getTime()],fillColor:r[1]}]}],chart:{height:398,type:"rangeBar",toolbar:{show:!1}},plotOptions:{bar:{horizontal:!0,barHeight:"30%"}},xaxis:{type:"datetime"}};new ApexCharts(document.querySelector("#earning-item"),t).render(),Chart.pluginService.register({afterUpdate:function(e){for(var t=1;t<e.config.data.labels.length;t++){(r=e.getDatasetMeta(0).data[t]).round={x:(e.chartArea.left+e.chartArea.right)/2,y:(e.chartArea.top+e.chartArea.bottom)/2,radius:(e.outerRadius+e.innerRadius)/2,thickness:(e.outerRadius-e.innerRadius)/2-1,backgroundColor:r._model.backgroundColor}}var r;(r=e.getDatasetMeta(0).data[0]).round={x:(e.chartArea.left+e.chartArea.right)/2,y:(e.chartArea.top+e.chartArea.bottom)/2,radius:(e.outerRadius+e.innerRadius)/2,thickness:(e.outerRadius-e.innerRadius)/2-1,backgroundColor:r._model.backgroundColor}},afterDraw:function(e){for(var t=1;t<e.config.data.labels.length;t++){var r=e.chart.ctx;arc=e.getDatasetMeta(0).data[t];Math.PI,arc._view.startAngle;var a=Math.PI/2-arc._view.endAngle;r.save(),r.translate(arc.round.x,arc.round.y),r.fillStyle=arc.round.backgroundColor,r.beginPath(),r.arc(arc.round.radius*Math.sin(a),arc.round.radius*Math.cos(a),arc.round.thickness,0,2*Math.PI),r.closePath(),r.fill(),r.restore()}r=e.chart.ctx;arc=e.getDatasetMeta(0).data[0];Math.PI,arc._view.startAngle,a=Math.PI/2-arc._view.endAngle;r.save(),r.translate(arc.round.x,arc.round.y),r.fillStyle=arc.round.backgroundColor,r.beginPath(),r.arc(arc.round.radius*Math.sin(a),arc.round.radius*Math.cos(a),arc.round.thickness,0,2*Math.PI),r.closePath(),r.fill(),r.restore()}});var a=e("sales-category"),o={type:"doughnut",data:{labels:["Watch","Iphone","Book","TV"],datasets:[{data:[35,15,8,7,20],backgroundColor:a,hoverBackgroundColor:a,borderWidth:0,borderColor:a,hoverBorderWidth:0}]},options:{responsive:!1,legend:{display:!1},tooltips:{enabled:!0},cutoutPercentage:75,rotation:-.5*Math.PI,circumference:2*Math.PI,title:{display:!1}}},n=document.getElementById("sales-category");window.myDoughnut=new Chart(n,o)}();