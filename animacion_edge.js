/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};
var opts = {};
var resources = [
];
var symbols = {
"stage": {
    version: "3.0.0",
    minimumCompatibleVersion: "3.0.0",
    build: "3.0.0.322",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
            {
                id: 'Text2',
                type: 'text',
                rect: ['-236px', '9px','180px','43px','auto', 'auto'],
                text: "BIENVENIDOS",
                align: "center",
                font: ['Verdana, Geneva, sans-serif', 30, "rgba(133,94,250,1.00)", "400", "none", "normal"],
                textShadow: ["rgba(0,0,0,0.65098)", 3, 3, 3]
            },
            {
                id: 'Text3',
                type: 'text',
                rect: ['254px', '265px','81px','26px','auto', 'auto'],
                text: "A",
                align: "center",
                font: ['Verdana, Geneva, sans-serif', 30, "rgba(93,191,250,1.00)", "400", "none", "normal"],
                textShadow: ["rgba(0,0,0,0.65098)", 3, 3, 3]
            },
            {
                id: 'Text4',
                type: 'text',
                rect: ['624px', '103px','329px','43px','auto', 'auto'],
                text: "TURISMO NACIONAL ",
                align: "center",
                font: ['Verdana, Geneva, sans-serif', 30, "rgba(250,127,92,1.00)", "400", "none", "normal"],
                textShadow: ["rgba(45,11,11,0.811765)", 3, 3, 3]
            },
            {
                id: 'Text5',
                type: 'text',
                rect: ['266px', '-54px','59px','26px','auto', 'auto'],
                text: "E",
                align: "center",
                font: ['Verdana, Geneva, sans-serif', 30, "rgba(92,245,250,1.00)", "400", "none", "normal"],
                textShadow: ["rgba(0,0,0,0.65098)", 3, 3, 3]
            },
            {
                id: 'Text7',
                type: 'text',
                rect: ['167px', '204px','265px','34px','auto', 'auto'],
                text: "INTERNACIONAL",
                align: "center",
                font: ['Verdana, Geneva, sans-serif', 30, "rgba(220,92,250,1.00)", "400", "none", "normal"],
                textShadow: ["rgba(0,0,0,0.65098)", 3, 3, 3]
            }],
            symbolInstances: [

            ]
        },
    states: {
        "Base State": {
            "${_Text7}": [
                ["subproperty", "filter.drop-shadow.color", 'rgba(0,0,0,0)'],
                ["subproperty", "textShadow.offsetH", '3px'],
                ["color", "color", 'rgba(220,92,250,1)'],
                ["style", "font-weight", '400'],
                ["style", "left", '167px'],
                ["style", "top", '204px'],
                ["style", "opacity", '0'],
                ["style", "text-align", 'center'],
                ["subproperty", "textShadow.offsetV", '3px'],
                ["style", "font-style", 'normal'],
                ["subproperty", "textShadow.color", 'rgba(0,0,0,0.65098)'],
                ["style", "font-family", 'Verdana, Geneva, sans-serif'],
                ["subproperty", "textShadow.blur", '3px']
            ],
            "${_Text5}": [
                ["subproperty", "textShadow.blur", '3px'],
                ["subproperty", "textShadow.offsetH", '3px'],
                ["color", "color", 'rgba(92,245,250,1)'],
                ["style", "opacity", '1'],
                ["style", "left", '266px'],
                ["style", "top", '-54px'],
                ["subproperty", "textShadow.offsetV", '3px'],
                ["style", "text-align", 'center'],
                ["style", "font-family", 'Verdana, Geneva, sans-serif'],
                ["style", "font-style", 'normal'],
                ["subproperty", "textShadow.color", 'rgba(0,0,0,0.65098)'],
                ["subproperty", "filter.drop-shadow.color", 'rgba(0,0,0,0)'],
                ["style", "font-weight", '400']
            ],
            "${_Text3}": [
                ["subproperty", "filter.drop-shadow.color", 'rgba(0,0,0,0)'],
                ["subproperty", "textShadow.offsetH", '3px'],
                ["color", "color", 'rgba(93,191,250,1)'],
                ["style", "font-weight", '400'],
                ["style", "left", '254px'],
                ["style", "top", '265px'],
                ["subproperty", "textShadow.offsetV", '3px'],
                ["style", "text-align", 'center'],
                ["subproperty", "textShadow.color", 'rgba(0,0,0,0.65098)'],
                ["style", "font-style", 'normal'],
                ["style", "font-family", 'Verdana, Geneva, sans-serif'],
                ["subproperty", "textShadow.blur", '3px'],
                ["style", "opacity", '1']
            ],
            "${_Stage}": [
                ["color", "background-color", 'rgba(255,255,255,0.00)'],
                ["style", "width", '600px'],
                ["style", "height", '250px'],
                ["style", "overflow", 'hidden']
            ],
            "${_Text2}": [
                ["subproperty", "filter.grayscale", '0'],
                ["color", "color", 'rgba(133,94,250,1)'],
                ["style", "font-weight", '400'],
                ["style", "left", '-236px'],
                ["subproperty", "filter.saturate", '1'],
                ["style", "font-style", 'normal'],
                ["subproperty", "textShadow.blur", '3px'],
                ["subproperty", "textShadow.offsetH", '3px'],
                ["style", "width", '180px'],
                ["subproperty", "textShadow.offsetV", '3px'],
                ["style", "font-size", '30px'],
                ["style", "top", '9px'],
                ["style", "font-family", 'Verdana, Geneva, sans-serif'],
                ["style", "text-align", 'center'],
                ["subproperty", "filter.sepia", '0'],
                ["subproperty", "filter.blur", '0px'],
                ["subproperty", "textShadow.color", 'rgba(122,139,233,0.952941)'],
                ["subproperty", "filter.drop-shadow.color", 'rgba(0,0,0,0)'],
                ["style", "opacity", '1']
            ],
            "${_Text4}": [
                ["subproperty", "filter.drop-shadow.color", 'rgba(0,0,0,0)'],
                ["subproperty", "textShadow.offsetH", '3px'],
                ["color", "color", 'rgba(250,127,92,1)'],
                ["style", "font-weight", '400'],
                ["style", "left", '624px'],
                ["style", "width", '329px'],
                ["style", "top", '103px'],
                ["subproperty", "textShadow.offsetV", '3px'],
                ["style", "text-align", 'center'],
                ["subproperty", "textShadow.blur", '3px'],
                ["style", "font-style", 'normal'],
                ["subproperty", "textShadow.color", 'rgba(45,11,11,0.811765)'],
                ["style", "font-family", 'Verdana, Geneva, sans-serif'],
                ["style", "opacity", '1']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 10500,
            autoPlay: true,
            timeline: [
                { id: "eid11", tween: [ "style", "${_Text2}", "left", '183px', { fromValue: '-236px'}], position: 0, duration: 2000 },
                { id: "eid27", tween: [ "style", "${_Text5}", "left", '261px', { fromValue: '266px'}], position: 6000, duration: 2000 },
                { id: "eid4", tween: [ "style", "${_Text2}", "top", '9px', { fromValue: '9px'}], position: 0, duration: 0 },
                { id: "eid6", tween: [ "style", "${_Text2}", "top", '9px', { fromValue: '9px'}], position: 2000, duration: 0 },
                { id: "eid19", tween: [ "style", "${_Text3}", "left", '249px', { fromValue: '254px'}], position: 2000, duration: 2000 },
                { id: "eid29", tween: [ "style", "${_Text7}", "left", '167px', { fromValue: '167px'}], position: 8000, duration: 0 },
                { id: "eid32", tween: [ "style", "${_Text7}", "left", '167px', { fromValue: '167px'}], position: 10000, duration: 0 },
                { id: "eid34", tween: [ "style", "${_Text7}", "opacity", '1', { fromValue: '0'}], position: 8000, duration: 2000 },
                { id: "eid17", tween: [ "style", "${_Text4}", "top", '103px', { fromValue: '103px'}], position: 4000, duration: 0 },
                { id: "eid15", tween: [ "style", "${_Text3}", "top", '58px', { fromValue: '265px'}], position: 2000, duration: 2000 },
                { id: "eid28", tween: [ "style", "${_Text5}", "top", '146px', { fromValue: '-54px'}], position: 6000, duration: 2000 },
                { id: "eid18", tween: [ "style", "${_Text4}", "left", '138px', { fromValue: '624px'}], position: 4000, duration: 2000 },
                { id: "eid30", tween: [ "style", "${_Text7}", "top", '204px', { fromValue: '204px'}], position: 8000, duration: 0 },
                { id: "eid33", tween: [ "style", "${_Text7}", "top", '204px', { fromValue: '204px'}], position: 10000, duration: 0 }            ]
        }
    }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources, opts);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-10163113");
