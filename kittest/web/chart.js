var options = {
  colors: ['#87BEE7', '#0E456F', '#1BC5BD', '#F64E60', '#FFA800'],
  series: [{
    name: 'Новый',
    data: [3]
  }, {
    name: 'В пути',
    data: [44, 5, 8]

  }, {
    name: 'Доставлено',
    data: [53, 10]
  }, {
    name: 'Не доставлено',
    data: [9, 2]
  }, {
    name: 'Готов к выдаче',
    data: [7, 7, 3]
  }],
  chart: {
    type: 'bar',
    height: 300,
    stacked: true,
    stackType: '100%',


  },



  // label: "Morning Shift"
  plotOptions: {
    bar: {
      horizontal: true,
      columnWidth: '100',
    },
  },
  stroke: {
    width: 1,
    colors: ['#fff']
  },
  title: {
    //  text: 'Неделя: всего заказов 106',


    style: {
      color: '#464E5F',
      fontSize: '17px',
      fontFamily: 'Poppins',
      fontWeight: 600,
      cssClass: 'apexcharts-xaxis-title',

    }
  },


  axisX: {
    show: true,

  },
  axisY: {
    show: false,

  },


  tooltip: {
    y: {
      formatter: function (val) {
        return val
      }
    }
  },
  fill: {
    opacity: 1
  },
  legend: {
    position: 'top',
    horizontalAlign: 'left',
    offsetX: 40
  },

  dataLabels: {
    enabled: true,
    textAnchor: 'start',
    style: {
      colors: ['#fff']
    }


  },
  xaxis: {
    //categories: ['Первый маршрут (заказы Туда)', 'Возвраты', 'Перенаправки'],
    tickAmount: undefined,
    tickPlacement: 'between',
    min: undefined,
    max: undefined,
    range: undefined,
    floating: false,
    decimalsInFloat: undefined,
    overwriteCategories: undefined,
    position: 'bottom',
  },
  labels: {
    show: false,
    rotate: -45,
    rotateAlways: false,
    hideOverlappingLabels: true,
    showDuplicates: false,
    trim: false,
    minHeight: undefined,
    maxHeight: 120,
    style: {
      colors: [],
      fontSize: '12px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      fontWeight: 400,
      cssClass: 'apexcharts-xaxis-label'
    }
  },

  yaxis: {
    labels: {
      show: false,
    }
  },


};


var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();




var campChart = {
  series: [51],
  chart: {
    height: 250,
    width:250,
    type: 'radialBar',
    toolbar: {
      show: true
    }
  },
  plotOptions: {
    radialBar: {
      startAngle: -135,
      endAngle: 225,
      hollow: {
        margin: 0,
        size: '70%',
        background: '#fff',
        image: undefined,
        imageOffsetX: 0,
        imageOffsetY: 0,
        position: 'front',
        dropShadow: {
          enabled: true,
          top: 3,
          left: 0,
          blur: 4,
          opacity: 0.24
        }
      },
      track: {
        background: '#8950FC',
        strokeWidth: '55%',
        margin: 0,
        dropShadow: {
          enabled: true,
          top: -3,
          left: 0,
          blur: 4,
          opacity: 0.35
        }
      },

      dataLabels: {
        show: true,
        name: {
          offsetY: -10,
          show: true,
          color: '#888',
          fontSize: '17px'
        },
        value: {
          formatter: function (val) {
            return val;
          },
          color: '#111',
          fontSize: '36px',
          show: true
        }
      }
    }
  },
  fill: {
    colors: ['#1BC5BD'],
    opacity: 0.9,
    type: 'solid'
  },
  stroke: {
    lineCap: 'round'
  },
  labels: ['%'],
  legend: {
    position: 'right',
    offsetY: 40,
    width: 500,
    labels: {
      colors: undefined,
      useSeriesColors: false
  }

  }

};
var campaignChart = new ApexCharts(document.querySelector("#campaignChart"), campChart);
campaignChart.render();