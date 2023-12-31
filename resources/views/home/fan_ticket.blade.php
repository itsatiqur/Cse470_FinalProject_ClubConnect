<!-- Fan Ticket Section -->
<section class="artists-section section-padding" id="section_4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="Ticket-Text">Tickets</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($approvedMatches as $match)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card mb-1">
                        <div class="card-header">
                            <h3 class="card-title">{{ $match->team1->club_name }} vs {{ $match->team2->club_name }}</h3>
                        </div>
                        <div class="card-body">
                            <p>Date & Time: {{ $match->match_datetime }}</p>
                            <p>Stadium: {{ $match->stadium }}</p>
                            @if ($match->team1_score !== null && $match->team2_score !== null)
                            <p>Score: {{ $match->team1_score }} - {{ $match->team2_score }}</p>
                            @else
                            <p>Score: Not updated yet.</p>
                            @endif
                            <h5>Tickets:</h5>
                            <div class="ticket-container">
                                <div class="ticket-grid">
                                    @foreach ($match->tickets as $ticket)
                                        <a href="{{ route('purchase_ticket', ['ticket' => $ticket->id]) }}" class="ticket-link">
                                            <div class="ticket-seat @if ($ticket->is_purchased) purchased @elseif ($ticket->is_selected) selected @endif">{{ $ticket->seat_number }}</div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Fan Ticket Section -->
