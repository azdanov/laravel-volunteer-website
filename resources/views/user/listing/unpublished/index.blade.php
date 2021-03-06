<?php

declare(strict_types=1);

use App\Models\Listing;

/** @var Listing[] $listings */
/** @var Category $category */
?>

@extends('layouts.app')

@section('content')
    {{ Breadcrumbs::render('generic', 'Unpublished') }}

    <div class="panel-outer">
        <div class="panel-inner">
            <div class="panel-heading">
                <h2 class="panel-heading-text">Unpublished</h2>
            </div>
            <div class="flex flex-wrap justify-between lg:flex-no-wrap px-4 py-4">
                @if ($listings->count())
                    @each('partials.listings.own_listing', $listings, 'listing'))
                @else
                    <p class="text-green-darker pb-4">
                        Currently no listings are unpublished. Great work!
                    </p>
                @endif
            </div>
        </div>
        @if ($listings->count())
            <div class="mt-4">
                {{ $listings->links() }}
            </div>
        @endif
    </div>
@endsection
