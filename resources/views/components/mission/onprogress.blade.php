<x-panel>
    <p>Misi ini sedang dikerjakan oleh <strong>{{ $mission->assignee->name }}</strong> dan dimentori oleh <strong>{{ $mission->owner->name }}</strong>.</p>
    <p>Menyelesaikan misi + upgrading skills + mendapat reward, tertarik mengikuti jejak Anandia?</p>
    <div class="ui divider hidden"></div>
    <x-link url="{{ route('mission.index') }}" class="fluid basic big">
        <i class="icon left long arrow"></i> Explore Misi Lainnya
    </x-link>
</x-panel>