
var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']

var geoData = [
	{ "value": 438, "state": "nj" }, 
	{ "value": 387.35, "state": "ri" }, 
	{ "value": 312.68, "state": "ma" }, 
	{ "value": 271.4, "state": "ct" }, 
	{ "value": 209.23, "state": "md" }, 
	{ "value": 195.18, "state": "ny" }, 
	{ "value": 154.87, "state": "de" }, 
	{ "value": 114.43, "state": "fl" }, 
	{ "value": 107.05, "state": "oh" }, 
	{ "value": 105.8, "state": "pa" }, 
	{ "value": 86.27, "state": "il" }, 
	{ "value": 83.85, "state": "ca" }, 
	{ "value": 72.83, "state": "hi" }, 
	{ "value": 69.03, "state": "va" }, 
	{ "value": 67.55, "state": "mi" }, 
	{ "value": 65.46, "state": "in" }, 
	{ "value": 63.8, "state": "nc" }, 
	{ "value": 54.59, "state": "ga" }, 
	{ "value": 53.29, "state": "tn" }, 
	{ "value": 53.2, "state": "nh" }, 
	{ "value": 51.45, "state": "sc" }, 
	{ "value": 39.61, "state": "la" }, 
	{ "value": 39.28, "state": "ky" }, 
	{ "value": 38.13, "state": "wi" }, 
	{ "value": 34.2, "state": "wa" }, 
	{ "value": 33.84, "state": "al" }, 
	{ "value": 31.36, "state": "mo" }, 
	{ "value": 30.75, "state": "tx" }, 
	{ "value": 29.0, "state": "wv" }, 
	{ "value": 25.41, "state": "vt" }, 
	{ "value": 23.86, "state": "mn" }, 
	{ "value": 23.42, "state": "ms" }, 
	{ "value": 20.22, "state": "ia" }, 
	{ "value": 19.82, "state": "ar" }, 
	{ "value": 19.4, "state": "ok" }, 
	{ "value": 17.43, "state": "az" }, 
	{ "value": 16.01, "state": "co" }, 
	{ "value": 15.95, "state": "me" }, 
	{ "value": 13.76, "state": "or" }, 
	{ "value": 12.69, "state": "ks" }, 
	{ "value": 10.5, "state": "ut" }, 
	{ "value": 8.6, "state": "ne" }, 
	{ "value": 7.03, "state": "nv" }, 
	{ "value": 6.04, "state": "id" }, 
	{ "value": 5.79, "state": "nm" }, 
	{ "value": 3.84, "state": "sd" }, 
	{"value": 3.59, "state": "nd" }, 
	{ "value": 2.39, "state": "mt" }, 
	{ "value": 1.96, "state": "wy" }, 
	{ "value": 0.42, "state": "ak" }
];

var depositsData = [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4];

var withdrawlsData = [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6];
