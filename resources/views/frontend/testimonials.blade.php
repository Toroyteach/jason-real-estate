@extends('layout.app')
@section('content')

<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img" style="background-image: url('{{ asset('frontend/assets/banner.jpg') }}'); position: relative;">
    <div style="position:absolute; inset:0; background:rgba(0,0,0,0.5); z-index:1;"></div>

    <div class="container" style="position: relative; z-index: 2;">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2 style="color: #fff;"> Insights & Stories </h2>
                        <p style="color: #eee;">Explore perspectives from the Collines Comms team — from content strategy to media trends and storytelling tips that inspire impact-driven communication.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<div style="padding:40px; background:#f3e6d8;">

    <h2 style="text-align:center; margin-bottom:30px; color:#5a2e1e; font-family:Arial, sans-serif;">
        Testimonials
    </h2>

    <div style="max-width:900px; margin:0 auto; display:grid; grid-template-columns:1fr 1fr; gap:25px;">

        <!-- CARD 1 -->
        <div style="background:linear-gradient(145deg, #fdf1e6, #ffe6cc); padding:20px; border-radius:15px; 
                    box-shadow:0 6px 12px rgba(0,0,0,0.15); border-top:4px solid #c88c55;
                    height:250px; display:flex; flex-direction:column; 
                    justify-content:center; align-items:center; text-align:center; 
                    transition:transform .3s, box-shadow .3s;"
             onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 24px rgba(0,0,0,0.25)'" 
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.15)'">
            <h3 style="color:#7b3f00; font-weight:bold; margin-bottom:8px;">Amazing Service!</h3>
            <p style="color:#5a3a1e; font-weight:500; margin-bottom:10px;">I really loved how they handled me!</p>
            <span style="color:#8c5a36; font-size:0.85em; font-style:italic;">— Sarah Johnson, Jan 15, 2025</span>
        </div>

        <!-- CARD 2 -->
        <div style="background:linear-gradient(145deg, #fdf1e6, #ffe6cc); padding:20px; border-radius:15px; 
                    box-shadow:0 6px 12px rgba(0,0,0,0.15); border-top:4px solid #c88c55;
                    height:250px; display:flex; flex-direction:column; 
                    justify-content:center; align-items:center; text-align:center; 
                    transition:transform .3s, box-shadow .3s;"
             onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 24px rgba(0,0,0,0.25)'" 
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.15)'">
            <h3 style="color:#7b3f00; font-weight:bold; margin-bottom:8px;">Great Results</h3>
            <p style="color:#5a3a1e; font-weight:500; margin-bottom:10px;">My experience was smooth and comfortable.</p>
            <span style="color:#8c5a36; font-size:0.85em; font-style:italic;">— Michael Brown, Feb 3, 2025</span>
        </div>

        <!-- CARD 3 -->
        <div style="background:linear-gradient(145deg, #fdf1e6, #ffe6cc); padding:20px; border-radius:15px; 
                    box-shadow:0 6px 12px rgba(0,0,0,0.15); border-top:4px solid #c88c55;
                    height:250px; display:flex; flex-direction:column; 
                    justify-content:center; align-items:center; text-align:center; 
                    transition:transform .3s, box-shadow .3s;"
             onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 24px rgba(0,0,0,0.25)'" 
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.15)'">
            <h3 style="color:#7b3f00; font-weight:bold; margin-bottom:8px;">Highly Recommend!</h3>
            <p style="color:#5a3a1e; font-weight:500; margin-bottom:10px;">Professional and friendly team.</p>
            <span style="color:#8c5a36; font-size:0.85em; font-style:italic;">— Emily Davis, Mar 22, 2025</span>
        </div>

        <!-- CARD 4 -->
        <div style="background:linear-gradient(145deg, #fdf1e6, #ffe6cc); padding:20px; border-radius:15px; 
                    box-shadow:0 6px 12px rgba(0,0,0,0.15); border-top:4px solid #c88c55;
                    height:250px; display:flex; flex-direction:column; 
                    justify-content:center; align-items:center; text-align:center; 
                    transition:transform .3s, box-shadow .3s;"
             onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 24px rgba(0,0,0,0.25)'" 
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.15)'">
            <h3 style="color:#7b3f00; font-weight:bold; margin-bottom:8px;">Loved It!</h3>
            <p style="color:#5a3a1e; font-weight:500; margin-bottom:10px;">Everything was on point.</p>
            <span style="color:#8c5a36; font-size:0.85em; font-style:italic;">— Daniel Smith, Apr 10, 2025</span>
        </div>

        <!-- CARD 5 -->
        <div style="background:linear-gradient(145deg, #fdf1e6, #ffe6cc); padding:20px; border-radius:15px; 
                    box-shadow:0 6px 12px rgba(0,0,0,0.15); border-top:4px solid #c88c55;
                    height:250px; display:flex; flex-direction:column; 
                    justify-content:center; align-items:center; text-align:center; 
                    transition:transform .3s, box-shadow .3s;"
             onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 24px rgba(0,0,0,0.25)'" 
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.15)'">
            <h3 style="color:#7b3f00; font-weight:bold; margin-bottom:8px;">Amazing!</h3>
            <p style="color:#5a3a1e; font-weight:500; margin-bottom:10px;">Would definitely come back.</p>
            <span style="color:#8c5a36; font-size:0.85em; font-style:italic;">— Olivia Martinez, May 8, 2025</span>
        </div>

        <!-- CARD 6 -->
        <div style="background:linear-gradient(145deg, #fdf1e6, #ffe6cc); padding:20px; border-radius:15px; 
                    box-shadow:0 6px 12px rgba(0,0,0,0.15); border-top:4px solid #c88c55;
                    height:250px; display:flex; flex-direction:column; 
                    justify-content:center; align-items:center; text-align:center; 
                    transition:transform .3s, box-shadow .3s;"
             onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 24px rgba(0,0,0,0.25)'" 
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.15)'">
            <h3 style="color:#7b3f00; font-weight:bold; margin-bottom:8px;">Professional Work</h3>
            <p style="color:#5a3a1e; font-weight:500; margin-bottom:10px;">Very skilled and welcoming.</p>
            <span style="color:#8c5a36; font-size:0.85em; font-style:italic;">— William Lee, Jun 12, 2025</span>
        </div>

        <!-- CARD 7 -->
        <div style="background:linear-gradient(145deg, #fdf1e6, #ffe6cc); padding:20px; border-radius:15px; 
                    box-shadow:0 6px 12px rgba(0,0,0,0.15); border-top:4px solid #c88c55;
                    height:250px; display:flex; flex-direction:column; 
                    justify-content:center; align-items:center; text-align:center; 
                    transition:transform .3s, box-shadow .3s;"
             onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 24px rgba(0,0,0,0.25)'" 
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.15)'">
            <h3 style="color:#7b3f00; font-weight:bold; margin-bottom:8px;">Loved the vibe</h3>
            <p style="color:#5a3a1e; font-weight:500; margin-bottom:10px;">Everything felt luxurious.</p>
            <span style="color:#8c5a36; font-size:0.85em; font-style:italic;">— Sophia Wilson, Jul 2, 2025</span>
        </div>

        <!-- CARD 8 -->
        <div style="background:linear-gradient(145deg, #fdf1e6, #ffe6cc); padding:20px; border-radius:15px; 
                    box-shadow:0 6px 12px rgba(0,0,0,0.15); border-top:4px solid #c88c55;
                    height:250px; display:flex; flex-direction:column; 
                    justify-content:center; align-items:center; text-align:center; 
                    transition:transform .3s, box-shadow .3s;"
             onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 24px rgba(0,0,0,0.25)'" 
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.15)'">
            <h3 style="color:#7b3f00; font-weight:bold; margin-bottom:8px;">Wonderful Team</h3>
            <p style="color:#5a3a1e; font-weight:500; margin-bottom:10px;">They went above my expectations.</p>
            <span style="color:#8c5a36; font-size:0.85em; font-style:italic;">— James Anderson, Aug 18, 2025</span>
        </div>

    </div>
</div>





@endsection