<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dellnes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

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
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
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
                    <svg width="320.2812866210937px" height="122px" xmlns="http://www.w3.org/2000/svg" viewBox="89.85935668945314 14 320.2812866210937 122" style="background: rgba(0, 0, 0, 0);" preserveAspectRatio="xMidYMid"><defs><filter id="editing-extrusion" x="-100%" y="-100%" width="300%" height="300%"><feFlood result="color1" flood-color="#444"></feFlood><feConvolveMatrix order="8,8" divisor="1" kernelMatrix="1 0 0 0 0 0 0 0 0 1 0 0 0 0 0 0 0 0 1 0 0 0 0 0 0 0 0 1 0 0 0 0 0 0 0 0 1 0 0 0 0 0 0 0 0 1 0 0 0 0 0 0 0 0 1 0 0 0 0 0 0 0 0 1" in="SourceAlpha" result="extrude"></feConvolveMatrix><feComposite in="color1" in2="extrude" result="comp-extrude" operator="in"></feComposite><feOffset dx="4" dy="4" in="comp-extrude" result="offset-extrude"></feOffset><feMerge><feMergeNode in="offset-extrude"></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter></defs><g filter="url(#editing-extrusion)"><g transform="translate(139.72998476028442, 98.68000030517578)"><path d="M21.25-33.92L21.25-33.92L21.25-33.92Q23.55-33.92 25.34-33.41L25.34-33.41L25.34-33.41Q25.41-33.66 25.54-34.37L25.54-34.37L25.86-36.35L25.86-36.35Q26.11-37.63 26.50-39.74L26.50-39.74L27.52-44.80L40.26-46.08L33.15-8.96L33.15-8.96Q33.09-8.58 33.09-7.94L33.09-7.94L33.09-6.91L33.09-6.91Q33.09-5.50 33.79-4.45L33.79-4.45L33.79-4.45Q34.50-3.39 35.65-3.39L35.65-3.39L35.65-3.39Q34.37-0.38 30.46 0.90L30.46 0.90L30.46 0.90Q29.12 1.28 27.23 1.28L27.23 1.28L27.23 1.28Q25.34 1.28 23.62 0.29L23.62 0.29L23.62 0.29Q21.89-0.70 21.38-2.37L21.38-2.37L21.38-2.37Q20.35-0.70 18.30 0.29L18.30 0.29L18.30 0.29Q16.26 1.28 13.28 1.28L13.28 1.28L13.28 1.28Q10.30 1.28 7.84 0.51L7.84 0.51L7.84 0.51Q5.38-0.26 3.84-1.92L3.84-1.92L3.84-1.92Q1.02-5.18 1.02-12.61L1.02-12.61L1.02-12.61Q1.02-22.21 6.66-28.03L6.66-28.03L6.66-28.03Q12.29-33.92 21.25-33.92ZM20.80-30.08L20.80-30.08L20.80-30.08Q18.43-30.08 17.15-27.52L17.15-27.52L17.15-27.52Q15.87-24.96 14.56-18.62L14.56-18.62L14.56-18.62Q13.25-12.29 13.25-6.59L13.25-6.59L13.25-6.59Q13.25-2.69 15.55-2.69L15.55-2.69L15.55-2.69Q17.60-2.69 19.04-4.74L19.04-4.74L19.04-4.74Q20.48-6.78 21.06-10.18L21.06-10.18L24.51-28.93L24.51-28.93Q23.17-30.08 20.80-30.08ZM67.01-10.82L67.01-10.82L67.01-10.82Q68.61-9.73 68.61-7.33L68.61-7.33L68.61-7.33Q68.61-4.93 67.39-3.39L67.39-3.39L67.39-3.39Q66.18-1.86 64.19-0.83L64.19-0.83L64.19-0.83Q60.10 1.28 55.68 1.28L55.68 1.28L55.68 1.28Q51.26 1.28 48.67 0.32L48.67 0.32L48.67 0.32Q46.08-0.64 44.35-2.43L44.35-2.43L44.35-2.43Q40.96-5.82 40.96-12.03L40.96-12.03L40.96-12.03Q40.96-21.70 46.21-27.58L46.21-27.58L46.21-27.58Q51.84-33.92 61.63-33.92L61.63-33.92L61.63-33.92Q67.71-33.92 70.72-31.36L70.72-31.36L70.72-31.36Q72.96-29.44 72.96-26.30L72.96-26.30L72.96-26.30Q72.96-15.04 53.50-15.04L53.50-15.04L53.50-15.04Q53.25-13.38 53.25-11.97L53.25-11.97L53.25-11.97Q53.25-9.02 54.56-7.90L54.56-7.90L54.56-7.90Q55.87-6.78 58.30-6.78L58.30-6.78L58.30-6.78Q60.74-6.78 63.33-7.90L63.33-7.90L63.33-7.90Q65.92-9.02 67.01-10.82ZM53.95-17.79L53.95-17.79L53.95-17.79Q58.50-17.79 61.12-20.61L61.12-20.61L61.12-20.61Q63.74-23.30 63.74-27.58L63.74-27.58L63.74-27.58Q63.74-29.06 63.20-29.86L63.20-29.86L63.20-29.86Q62.66-30.66 61.57-30.66L61.57-30.66L61.57-30.66Q60.48-30.66 59.55-30.24L59.55-30.24L59.55-30.24Q58.62-29.82 57.66-28.42L57.66-28.42L57.66-28.42Q55.30-25.22 53.95-17.79ZM90.43-3.52L90.43-3.52L90.43-3.52Q88.45 1.28 82.11 1.28L82.11 1.28L82.11 1.28Q78.91 1.28 76.86-0.96L76.86-0.96L76.86-0.96Q75.20-2.82 75.20-4.93L75.20-4.93L75.20-4.93Q75.20-9.73 77.44-20.22L77.44-20.22L82.11-44.80L95.10-46.08L88.90-13.70L88.90-13.70Q87.81-8.96 87.81-7.30L87.81-7.30L87.81-7.30Q87.81-3.65 90.43-3.52ZM111.17-3.52L111.17-3.52L111.17-3.52Q109.18 1.28 102.85 1.28L102.85 1.28L102.85 1.28Q99.65 1.28 97.60-0.96L97.60-0.96L97.60-0.96Q95.94-2.82 95.94-4.93L95.94-4.93L95.94-4.93Q95.94-9.73 98.18-20.22L98.18-20.22L102.85-44.80L115.84-46.08L109.63-13.70L109.63-13.70Q108.54-8.96 108.54-7.30L108.54-7.30L108.54-7.30Q108.54-3.65 111.17-3.52ZM143.68 1.28L143.68 1.28L143.68 1.28Q135.94 1.28 135.94-4.74L135.94-4.74L135.94-4.74Q136-6.40 136.51-9.22L136.51-9.22L137.66-15.10L137.66-15.10Q139.39-23.42 139.39-25.28L139.39-25.28L139.39-25.28Q139.39-28.99 137.22-28.99L137.22-28.99L137.22-28.99Q133.57-28.99 131.65-19.46L131.65-19.46L127.87 0L115.01 1.28L121.66-32.70L132.16-33.92L131.14-27.65L131.14-27.65Q134.14-33.92 143.36-33.92L143.36-33.92L143.36-33.92Q147.84-33.92 149.73-32.03L149.73-32.03L149.73-32.03Q151.62-30.14 151.62-25.92L151.62-25.92L151.62-25.92Q151.62-21.95 149.57-12.67L149.57-12.67L149.57-12.67Q148.61-8.51 148.61-6.94L148.61-6.94L148.61-6.94Q148.61-5.38 149.47-4.48L149.47-4.48L149.47-4.48Q150.34-3.58 151.62-3.46L151.62-3.46L151.62-3.46Q150.98-1.28 148.77 0L148.77 0L148.77 0Q146.56 1.28 143.68 1.28ZM182.66-10.82L182.66-10.82L182.66-10.82Q184.26-9.73 184.26-7.33L184.26-7.33L184.26-7.33Q184.26-4.93 183.04-3.39L183.04-3.39L183.04-3.39Q181.82-1.86 179.84-0.83L179.84-0.83L179.84-0.83Q175.74 1.28 171.33 1.28L171.33 1.28L171.33 1.28Q166.91 1.28 164.32 0.32L164.32 0.32L164.32 0.32Q161.73-0.64 160.00-2.43L160.00-2.43L160.00-2.43Q156.61-5.82 156.61-12.03L156.61-12.03L156.61-12.03Q156.61-21.70 161.86-27.58L161.86-27.58L161.86-27.58Q167.49-33.92 177.28-33.92L177.28-33.92L177.28-33.92Q183.36-33.92 186.37-31.36L186.37-31.36L186.37-31.36Q188.61-29.44 188.61-26.30L188.61-26.30L188.61-26.30Q188.61-15.04 169.15-15.04L169.15-15.04L169.15-15.04Q168.90-13.38 168.90-11.97L168.90-11.97L168.90-11.97Q168.90-9.02 170.21-7.90L170.21-7.90L170.21-7.90Q171.52-6.78 173.95-6.78L173.95-6.78L173.95-6.78Q176.38-6.78 178.98-7.90L178.98-7.90L178.98-7.90Q181.57-9.02 182.66-10.82ZM169.60-17.79L169.60-17.79L169.60-17.79Q174.14-17.79 176.77-20.61L176.77-20.61L176.77-20.61Q179.39-23.30 179.39-27.58L179.39-27.58L179.39-27.58Q179.39-29.06 178.85-29.86L178.85-29.86L178.85-29.86Q178.30-30.66 177.22-30.66L177.22-30.66L177.22-30.66Q176.13-30.66 175.20-30.24L175.20-30.24L175.20-30.24Q174.27-29.82 173.31-28.42L173.31-28.42L173.31-28.42Q170.94-25.22 169.60-17.79ZM209.92-22.46L209.92-22.46L209.92-22.46Q210.82-24.83 210.82-26.88L210.82-26.88L210.82-26.88Q210.82-30.66 207.74-30.66L207.74-30.66L207.74-30.66Q206.14-30.66 204.83-29.22L204.83-29.22L204.83-29.22Q203.52-27.78 203.52-25.98L203.52-25.98L203.52-25.98Q203.52-24.70 204.54-23.68L204.54-23.68L204.54-23.68Q206.02-22.27 209.79-19.97L209.79-19.97L209.79-19.97Q213.57-17.66 215.01-15.78L215.01-15.78L215.01-15.78Q216.45-13.89 216.45-11.30L216.45-11.30L216.45-11.30Q216.45-8.70 215.20-6.34L215.20-6.34L215.20-6.34Q213.95-3.97 211.71-2.30L211.71-2.30L211.71-2.30Q206.91 1.28 199.23 1.28L199.23 1.28L199.23 1.28Q195.07 1.28 191.87-0.90L191.87-0.90L191.87-0.90Q188.67-3.01 188.67-5.50L188.67-5.50L188.67-5.50Q188.67-8 190.50-9.47L190.50-9.47L190.50-9.47Q192.32-10.94 195.01-10.94L195.01-10.94L195.01-10.94Q197.70-10.94 199.36-9.92L199.36-9.92L199.36-9.92Q198.53-7.81 198.53-6.40L198.53-6.40L198.53-6.40Q198.53-2.18 202.11-2.18L202.11-2.18L202.11-2.18Q203.65-2.18 204.67-3.14L204.67-3.14L204.67-3.14Q205.70-4.10 205.70-5.76L205.70-5.76L205.70-5.76Q205.70-9.02 200.19-12.48L200.19-12.48L200.19-12.48Q195.71-15.42 194.69-16.58L194.69-16.58L194.69-16.58Q192.96-18.62 192.96-21.18L192.96-21.18L192.96-21.18Q192.96-23.74 194.18-26.18L194.18-26.18L194.18-26.18Q195.39-28.61 197.63-30.34L197.63-30.34L197.63-30.34Q202.30-33.92 210.43-33.92L210.43-33.92L210.43-33.92Q214.59-33.92 217.06-32.26L217.06-32.26L217.06-32.26Q219.52-30.59 219.52-27.78L219.52-27.78L219.52-27.78Q219.52-24.96 217.82-23.36L217.82-23.36L217.82-23.36Q216.13-21.76 213.06-21.76L213.06-21.76L213.06-21.76Q210.94-21.76 209.92-22.46Z" fill="#ccc"></path></g></g><style>text {
  font-size: 64px;
  font-family: Arial Black;
  dominant-baseline: central;
  text-anchor: middle;
}</style></svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://dellnes.no" class="underline text-gray-900 dark:text-white">Slektstre</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Oversikt over deler av slekten.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://dellnes.no" class="underline text-gray-900 dark:text-white">Bilder</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Logg inn for å se bilder.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://dellnes.no/" class="underline text-gray-900 dark:text-white">Kontakt</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Kontaktinformasjon til nettsted.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Geografisk kart</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Stedsnavn.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://dellnes.no/dellnes-caps.png" class="ml-1 underline">
                                Kj&oslash;p caps
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://dellnes.no" class="ml-1 underline">
                                Instagram
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        laravel php
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
