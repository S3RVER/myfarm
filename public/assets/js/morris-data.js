/*Morris Init*/
$(function() {
	"use strict";
    if($('#morris_line_chart').length > 0)
        // Line Chart
        Morris.Line({
            // ID of the element in which to draw the chart.
            element: 'morris_line_chart',
            // Chart data records -- each entry in this array corresponds to a point on
            // the chart.
            data: [
                {d: '1399-10-01', doctor: 5},
                {d: '1399-10-02', doctor: 9},
                {d: '1399-10-03', doctor: 10},
                {d: '1399-10-04', doctor: 1},
                {d: '1399-10-05', doctor: 5},
                {d: '1399-10-06', doctor: 0},
                {d: '1399-10-07', doctor: 8},
                {d: '1399-10-08', doctor: 4},
                {d: '1399-10-09', doctor: 4},
                {d: '1399-10-10', doctor: 14},
                {d: '1399-10-11', doctor: 15},
                {d: '1399-10-12', doctor: 5},
                {d: '1399-10-13', doctor: 0},
                {d: '1399-10-14', doctor: 0},
                {d: '1399-10-15', doctor: 10},
                {d: '1399-10-16', doctor: 11},
                {d: '1399-10-17', doctor: 9},
                {d: '1399-10-18', doctor: 8},
                {d: '1399-10-19', doctor: 9},
                {d: '1399-10-20', doctor: 7},
                {d: '1399-10-21', doctor: 10},
                {d: '1399-10-22', doctor: 6},
                {d: '1399-10-23', doctor: 11},
                {d: '1399-10-24', doctor: 0},
                {d: '1399-10-25', doctor: 5},
                {d: '1399-10-26', doctor: 6},
                {d: '1399-10-27', doctor: 7},
                {d: '1399-10-28', doctor: 9},
                {d: '1399-10-29', doctor: 11},
                {d: '1399-10-30', doctor: 1},
            ],
            xkey: 'd',
            ykeys: ['doctor'],
            labels: ['سفارش'],
            pointSize: 4,
            pointStrokeColors:['#4aa23c', '#f8b32d'],
            behaveLikeLine: true,
            grid:true,
            gridTextColor:'#878787',
            lineWidth: 3,
            smooth: true,
            hideHover: 'auto',
            lineColors: ['#4aa23c', '#f8b32d'],
            resize: true,
            gridTextFamily:"iran sans",

        });



    if($('#karbar').length > 0)
        // Line Chart
        Morris.Line({
            // ID of the element in which to draw the chart.
            element: 'karbar',
            // Chart data records -- each entry in this array corresponds to a point on
            // the chart.
            data: [
                {d: '1399-10-01', user: 5},
                {d: '1399-10-02', user: 9},
                {d: '1399-10-03', user: 10},
                {d: '1399-10-04', user: 1},
                {d: '1399-10-05', user: 5},
                {d: '1399-10-06', user: 0},
                {d: '1399-10-07', user: 8},
                {d: '1399-10-08', user: 4},
                {d: '1399-10-09', user: 4},
                {d: '1399-10-10', user: 14},
                {d: '1399-10-11', user: 15},
            ],
            xkey: 'd',
            ykeys: ['user'],
            labels: ['کاربران'],
            pointSize: 4,
            pointStrokeColors:['#4aa23c', '#f8b32d'],
            behaveLikeLine: true,
            grid:true,
            gridTextColor:'#878787',
            lineWidth: 3,
            smooth: true,
            hideHover: 'auto',
            lineColors: ['#4aa23c', '#f8b32d'],
            resize: true,
            gridTextFamily:"iran sans",

        });
});
