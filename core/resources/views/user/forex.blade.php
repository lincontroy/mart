@extends('layouts.main')
@section('content')

<div class="contents">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "FX:EURUSD",
  "width": "100%",
  "height": "100%",
  "locale": "en",
  "dateRange": "1D",
  "colorTheme": "dark",
  "isTransparent": false,
  "autosize": true,
  "largeChartUrl": ""
}
  </script>
</div>
<!-- TradingView Widget END -->
            </div>
        </div>
    </div>
    </div>
    @endsection
