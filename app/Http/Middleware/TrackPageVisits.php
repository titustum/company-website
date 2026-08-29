<?php

namespace App\Http\Middleware;

use App\Models\PageVisit;
use Closure;
use Illuminate\Http\Request;
use Livewire\Mechanisms\HandleRequests\EndpointResolver;
use Symfony\Component\HttpFoundation\Response;

class TrackPageVisits
{
    /**
     * Record a page visit for public GET requests.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($this->shouldTrack($request)) {
            PageVisit::create([
                'path' => $request->path(),
                'visitor_id' => $request->session()->getId(),
                'ip_address' => $request->ip(),
                'user_agent' => str($request->userAgent())->limit(500)->toString() ?: null,
                'referer' => $request->headers->has('referer')
                    ? str($request->headers->get('referer'))->limit(500)->toString()
                    : null,
                'visited_at' => now(),
            ]);
        }

        return $response;
    }

    private function shouldTrack(Request $request): bool
    {
        $livewirePrefix = ltrim(EndpointResolver::prefix(), '/');

        return $request->isMethod('GET')
            && ! $request->is('up', $livewirePrefix.'/*');
    }
}