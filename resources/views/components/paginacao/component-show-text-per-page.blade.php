<p class="box-quantidade-exibicao text-md-left text-right">
    mostrando
    <span class="firstItem">{{ $result->firstItem() }}</span>
    até
    <span class="lastItem">{{ $result->lastItem() }}</span>
    de
    <span class="total">{{ $result->total() }}</span>
</p>
