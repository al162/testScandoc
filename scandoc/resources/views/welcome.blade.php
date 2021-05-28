<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SCANDOC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
     <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Cargar Imagen</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registro</a>
                        @endif
                    @endauth 
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="758px" height="180px" viewBox="-0.5 -0.5 758 180" content="&lt;mxfile host=&quot;app.diagrams.net&quot; modified=&quot;2021-05-22T05:09:27.686Z&quot; agent=&quot;5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36&quot; etag=&quot;8tneTWpLswNicqlZPHWW&quot; version=&quot;14.7.0&quot; type=&quot;google&quot;&gt;&lt;diagram id=&quot;xJ3PmlIColxY5haHJ23p&quot; name=&quot;Page-1&quot;&gt;zVbfb5swEP5rkLaHRBgHmjwmpGmktVOlTpr6NDlgwKuxmXFaur9+Z2wI5IfUSt20PDTn787n8/fdxfVwXDY3ilTFnUwp9wI/bTy89oJgMUfw1wCvFpjNIwvkiqUWQgfggf2mDvQdumcprUeBWkquWTUGEykETfQII0rJl3FYJvn41Irk9AR4SAg/Rb+zVBcWnQdXB3xLWV50J6NoYT0l6YLdTeqCpPJlAOFrD8dKSm2tsokpN9x1vNh9mwvevjBFhX7Lhl2eYvbof9mWP2/95q7I8bftZGazPBO+dxf2gohDvlUmIS1UrV8dFdGvvewck7oVagkBKPSr5uAFKzffQKFYy6TLBmXZhNbrGOlzB5o2Bi90yQFAYBLOcgF2AtejCoBnqjQDYZbOUbI0NdtXikI1ZNem8mFdSSZ0K3u48sK1ybXX0lbcpq61kk80llxC3rWQgvYlmUNoc5Fh1OsG/U5lSbV6hRC3oVPatTpauPXLoXGiLqYYNM2Vw4jr1bzPfJATDKfoO9QNL6qbsuez4hodJo56oy6nmT4V96hHEsfkMBDPwjma0yH013ppVExGkvEZRDECTMWmACLqSU0Vy8Z1db86HYZG7jdeb1xNXRFx9so7kjzlSu5FOnGJzc1VvvsUhKCXbys9sj+bRVvMEWMBPkeYFwfe8nrAl61mXOEFGgFum+N/GNQPmEn8hpmc/cuZjM7M5BHH8FJUxmRl+zj1hN6SHeX3QJBm0hC7k1rLEgK4caz6xor7hsVZ+zkjipaV4buu7KOZsYZC1av2yGWH+h0CdqG1eXKX5vbBphI5K/NpAscHm33FJUlr02cwqQKaoLd+3H+9QTDX2J/Clo+RNAqPNA0XUxSeyIq6N3ooKwrQNMLvlhaWh4e69Q3+28HXfwA=&lt;/diagram&gt;&lt;/mxfile&gt;"><defs/><g><rect x="0" y="55" width="620" height="70" fill="none" stroke="none" pointer-events="all"/><g transform="translate(-0.5 -0.5)"><switch><foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 1px; height: 1px; padding-top: 90px; margin-left: 310px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; "><div style="display: inline-block; font-size: 12px; font-family: Helvetica; color: #000000; line-height: 1.2; pointer-events: all; white-space: nowrap; "><font style="font-size: 150px">ScanDoc</font></div></div></div></foreignObject><text x="310" y="94" fill="#000000" font-family="Helvetica" font-size="12px" text-anchor="middle">ScanDoc</text></switch></g><rect x="10" y="55" width="640" height="70" fill="none" stroke="none" pointer-events="all"/><g transform="translate(-0.5 -0.5)"><switch><foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 1px; height: 1px; padding-top: 90px; margin-left: 330px;"><div style="box-sizing: border-box; font-size: 0; text-align: center; "><div style="display: inline-block; font-size: 12px; font-family: Helvetica; color: #000000; line-height: 1.2; pointer-events: all; white-space: nowrap; "><div style="text-align: left"><font color="#45818e" style="font-size: 150px">ScanDoc</font><font face="arial, sans-serif" size="1" color="#45818e"><span style="background-color: rgb(255 , 255 , 255) ; font-size: 23px">®</span></font></div></div></div></div></foreignObject><text x="330" y="94" fill="#000000" font-family="Helvetica" font-size="12px" text-anchor="middle">ScanDoc®</text></switch></g><image x="629.5" y="23.65" width="127" height="121.63" xlink:href="https://pngimg.com/uploads/scanner/scanner_PNG101530.png" preserveAspectRatio="none"/></g><switch><g requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"/><a transform="translate(0,-5)" xlink:href="https://www.diagrams.net/doc/faq/svg-export-text-problems" target="_blank"><text text-anchor="middle" font-size="10px" x="50%" y="100%">Viewer does not support full SVG 1.1</text></a></switch></svg>
                </div>

                <div align="center">
                <img src="https://www.softpatagonia.com/assets/images/partelogo.png"/>
                <img src="https://www.softpatagonia.com/assets/images/logomenu1.png"/>
                </div>

               
                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        
                    </div>

                    
                </div>
            </div>
        </div>
    </body>
</html>
