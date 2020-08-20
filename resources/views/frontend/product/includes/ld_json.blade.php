            <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "{{ $product->name }}",
@if ($product->types->count() > 0)
@if ($product->types[0]->img)
            "image": [
                "{{ config('app.url') }}/storage/img/products/types/{{ $product->types[0]->img }}"
            ],
@endif
@endif
@if ($product->description)
            "description": "{{ $product->description }}",
@endif
@if ($product->types->count() > 0)
            "sku": "{{ $product->types[0]->id }}",
            "mpn": "{{ $product->types[0]->id }}",
@endif
            "brand": {
                "@type": "Brand",
                "name": "{{ config('app.name') }}"
            },
            "offers": {
                "@type": "Offer",
                "url": "{{ config('app.url') }}",
                "priceCurrency": "PLN",
                "price": "{{ $product->types[0]->price }}",
                "priceValidUntil": "2020-10-01",
                "itemCondition": "https://schema.org/UsedCondition",
                "availability": "https://schema.org/InStock",
                "seller": {
                    "@type": "Organization",
                    "name": "{{ config('app.name') }}"
                }
            },
@if ($product->reviews->count() > 0)
            "review": [
@foreach($product->reviews as $review)
              {
                "@type": "Review",
                "author": "{{ $review->author }}",
                "name": "{{ $product->name }}",
                "reviewRating": {
                  "@type": "Rating",
                  "ratingValue": "{{ $review->rating }}",
                  "bestRating": "5",
                  "worstRating": "1"
                }
              }
@if (!$loop->last)
              ,
@endif
@endforeach    
            ],
            "aggregateRating": {
              "@type": "AggregateRating",
              "ratingValue": "{{ $rating }}",
              "reviewCount": "{{ $reviewCount }}"
            }
@endif
        }
        </script>
