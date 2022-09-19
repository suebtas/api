<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-white-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <div  class="h-16 w-auto text-gray-700 sm:h-20">
                        <h1>API</h1>
                    </div>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="api/Rainfall" class="underline text-gray-900 dark:text-white">A001 /Rainfall ข้อมูลปริมาณน้ำฝน</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <div>ตัวอย่าง HTTP Response Body ของข้อมูลปริมาณน้ำฝน 15 นาที</div>
                                    <code >                                        
{
	"meta": {
		"apiVersion": "1.0",
		"providerAgencyCode": "G09006",
		"waterDataType": "A001",
		"interval": "C-15"
	},
	"resourceType": "Bundle",
	"type": "searchset",
	"total": 1,
	"entry": [
		{
			"resourceType": "RainfallMeasurement",
			"agencyCode": "G09006",
			"station": {
				"type": "Station",
				"id": "G09006-1032662",
				"reference": "Station/G09006-1032662"
			},
			"measurements": [
				{
					"resourceType": "Rainfall",
					"measureDatetime": "2022-05-02T23:15:00",
					"value": 2.1,
					"qualityFlag": "U",
					"comment": "no data check",
					"qcLevel": "1"
				},
				{
					"resourceType": "Rainfall",
					"measureDatetime": "2022-05-02T23:30:00",
					"value": 2.9,
					"qualityFlag": "U",
					"comment": "no data check",
					"qcLevel": "1"
				}
			]
		}
	]
}
                                    </code>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="api/Runoff" class="underline text-gray-900 dark:text-white">A002 /Runoff ข้อมูลน้ำท่า</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <div>ตัวอย่าง HTTP Response Body ของข้อมูลน้ำท่ารายชั่วโมง (60นาที)</div>
                                    <code >   
                                        
{
	"meta": {
		"apiVersion": "1.0",
		"providerAgencyCode": "G09006",
		"waterDataType": "A002",
		"interval": "C-60"
	},
	"resourceType": "Bundle",
	"type": "searchset",
	"total": 1,
	"entry": [
		{
			"resourceType": "RunoffMeasurement",
			"agencyCode": "G09006",
			"station": {
				"type": "Station",
				"id": "G09006-1032662",
				"reference": "Station/G09006-1032662"
			},
			"measurements": [
				{
					"resourceType": "WaterLevel",
					"measureDatetime": "2022-05-02T22:00:00",
					"value": 38.23,
					"qualityFlag": "U",
					"comment": "Unchecked",
					"qcLevel": "1"
				},
				{
					"resourceType": "Discharge",
					"measureDatetime": "2022-05-02T23:00:00",
					"value": 313.12,
					"qualityFlag": "U",
					"comment": "Unchecked",
					"qcLevel": "1"
				}
			]
		}
	]
}
                                    </code>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="api/WaterResource" class="underline text-gray-900 dark:text-white">A003 /WaterResource ข้อมูลแหล่งน้ำ</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <div>ตัวอย่าง HTTP Response Body ของข้อมูลแหล่งน้ำรายชั่วโมง (60นาที)</div>
                                    <code>                                    
{
	"meta": {
		"apiVersion": "1.0",
		"providerAgencyCode": "G09006",
		"waterDataType": "A003",
		"interval": "C-60"
	},
	"resourceType": "Bundle",
	"type": "searchset",
	"total": 1,
	"entry": [
		{
			"resourceType": "WaterResourceMeasurement",
			"station": {
				"type": "Station",
				"id": "G09006-1032662",
				"reference": "Station/G09006-1032662"
			},
			"measurements": [
				{
					"resourceType": "Storage",
					"measureDatetime": "2022-05-02T23:00:00",
					"value": 5468.8,
					"qualityFlag": "U",
					"comment": "Unchecked",
					"qcLevel": "1"
				},
				{
					"resourceType": "ActiveStorage",
					"measureDatetime": "2022-05-02T23:00:00",
					"value": 1668.8,
					"qualityFlag": "U",
					"comment": "Unchecked",
					"qcLevel": "1"
				},
				{
					"resourceType": "Inflow",
					"measureDatetime": "2022-05-02T23:00:00",
					"value": 0,
					"qualityFlag": "U",
					"comment": "Unchecked",
					"qcLevel": "1"
				},
				{
					"resourceType": "Outflow",
					"measureDatetime": "2022-05-02T23:00:00",
					"value": 6.5,
					"qualityFlag": "U",
					"comment": "Unchecked",
					"qcLevel": "1"
				}
			]
		}
	]
}
                                    </code>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="api/StationInfo" class="underline text-gray-900 dark:text-white">B001	/StationInfo	ข้อมูลสถานี</a></div>

                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <div>ตัวอย่าง HTTP Response Body จาก API สำหรับอ่านข้อมูลสถานีตรวจวัดตามเงื่อนไข</div>
                                    <code>
                                    {
                                        "meta": {
                                            "apiVersion": "1.0",
                                            "providerAgencyCode": "G09006",
                                            "waterDataType": "B001"
                                        },
                                        "resourceType": "Bundle",
                                        "type": "searchset",
                                        "total": 1,
                                        "entry": [
                                            {
                                                "fullUrl": "StationInfo/G09006-103662",
                                                "resource": {
                                                    "resourceType": "StationInfo",
                                                    "id": "G09006-103662",
                                                    "agencyCode": "G09006",
                                                    "stationCode": "125300",
                                                    "stationName": "Rain บุตะโก",
                                                    "stationType": "P",
                                                    "stationDescription": "สถานีตรวจวัดน้ำฝน แบบอัตโนมัติ",
                                                    "stationOperingStatus": "1",
                                                    "locationCode": "100108",
                                                    "latitude": 14.43342,
                                                    "longitude": 101.87185,
                                                    "altitude": 4,
                                                    "subBasinCode": "0301",
                                                    "waterResource": {
                                                        "type": "WaterResourceInfo",
                                                        "id": "G09006-100104",
                                                        "reference": "WaterReserveInfo/G09006-100104"
                                                    },
                                                    "lastUpdate": "2022-01-01T17:30:00"
                                                }
                                            }
                                        ]
                                    }
                                    </code>
                                </div>
                            </div>
                        </div>



                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="api/WaterResourceInfo" class="underline text-gray-900 dark:text-white">B002	/WaterResourceInfo	ข้อมูลรายละเอียดแหล่งน้ำ</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <div>ตัวอย่าง HTTP Response Body จาก API สำหรับอ่านข้อมูลสถานีตรวจวัดตามรหัสสถานี</div>
                                    <code>
{
	"meta": {
		"apiVersion": "1.0",
		"providerAgencyCode": "G09006",
		"waterDataType": "B001"
	},
	"resourceType": "Station",
	"id": "G09006-103662",
	"agencyCode": "G09006",
	"stationCode": "103662",
	"stationName": "Rain บุตะโก",
	"stationType": "P",
	"stationDescription": "สถานีตรวจวัดน้ำฝน แบบอัตโนมัติ",
	"stationOperingStatus": "1",
	"locationCode": "100108",
	"latitude": 14.43342,
	"longitude": 101.87185,
	"altitude": 4,
	"subBasinCode": "0301",
	"waterResource": {
		"type": "WaterResourceInfo",
		"id": "21-6303-1-0001",
		"reference": "WaterReserveInfo/21-6303-1-0001"
	},
	"lastUpdate": "2022-01-01T17:30:00"
}
                                    </code>                                    
                                </div>
                            </div>
                        </div>

                        
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white"></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            ©Copyright 2022
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                       Version beta 1.0
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
