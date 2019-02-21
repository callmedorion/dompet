<div class="row">
    <div class="col-xs-6 text-right strong">{{ __('transaction.start_balance') }}</div>
    <div class="col-xs-6 text-right strong">
        @if ($transactions->last())
            {{ format_number(balance(Carbon\Carbon::parse($transactions->last()->date)->subDay()->format('Y-m-d'))) }}
        @else
            0
        @endif
    </div>
</div>
<div class="row">
    <div class="col-xs-6 text-right strong">{{ __('transaction.income_total') }}</div>
    <div class="col-xs-6 text-right strong">{{ format_number($incomeTotal) }}</div>
</div>
<div class="row">
    <div class="col-xs-6 text-right strong">{{ __('transaction.spending_total') }}</div>
    <div class="col-xs-6 text-right strong">{{ format_number($spendingTotal) }}</div>
</div>
<div class="row">
    <div class="col-xs-6 text-right strong">{{ __('transaction.end_balance') }}</div>
    <div class="col-xs-6 text-right strong">
        @if ($transactions->first())
            {{ format_number(balance($transactions->first()->date)) }}
        @else
            0
        @endif
    </div>
</div>
</div>