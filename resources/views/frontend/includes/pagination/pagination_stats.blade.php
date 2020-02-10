@if ($paginator->hasPages())
    <div class="col-sm-5" style="margin-right:10px">
      show <strong>{{ ((($paginator->currentPage() -1) * $paginator->perPage()) + 1) }}</strong> to <strong>{{ ((($paginator->currentPage() -1) * $paginator->perPage()) + $paginator->count()) }}</strong> from <strong>{{ $paginator->total() }}</strong> entries.
    </div>
@endif