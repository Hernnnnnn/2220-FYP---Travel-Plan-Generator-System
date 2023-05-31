new Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'myfirstchart',
    lineColors:['#4bb6b7'],
    
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [
      { month: 'January', value: 10 },
      { month: 'February', value: 20 },
      { month: 'March', value: 30 },
      { month: 'April', value: 20},
      { month: 'May', value: 50 }

    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'month',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['value'],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Value']
  });