<div x-data="{ currentVal: 3 }" class="flex items-center gap-1">
    <label for="veryDissatisfied" class="cursor-pointer transition hover:scale-125 has-[:focus]:scale-125">
        <span class="sr-only">very dissatisfied</span>
        <input x-model="currentVal" id="veryDissatisfied" type="radio" class="sr-only" name="rating" value="1">
        <span class="text-2xl" :class="currentVal > 0 ? 'grayscale-0' : 'grayscale'">🥴</span>
    </label>

    <label for="dissatisfied" class="cursor-pointer transition hover:scale-125 has-[:focus]:scale-125">
        <span class="sr-only">dissatisfied</span>
        <input x-model="currentVal" id="dissatisfied" type="radio" class="sr-only" name="rating" value="2">
        <span class="text-2xl" :class="currentVal > 1 ? 'grayscale-0' : 'grayscale'">😕</span>
    </label>

    <label for="neutral" class="cursor-pointer transition hover:scale-125 has-[:focus]:scale-125">
        <span class="sr-only">neutral</span>
        <input x-model="currentVal" id="neutral" type="radio" class="sr-only" name="rating" value="3">
        <span class="text-2xl" :class="currentVal > 2 ? 'grayscale-0' : 'grayscale'">😐</span>
    </label>

    <label for="satisfied" class="cursor-pointer transition hover:scale-125 has-[:focus]:scale-125">
        <span class="sr-only">satisfied</span>
        <input x-model="currentVal" id="satisfied" type="radio" class="sr-only" name="rating" value="4">
        <span class="text-2xl" :class="currentVal > 3 ? 'grayscale-0' : 'grayscale'">😊</span>
    </label>

    <label for="verySatisfied" class="cursor-pointer transition hover:scale-125 has-[:focus]:scale-125">
        <span class="sr-only">very satisfied</span>
        <input x-model="currentVal" id="verySatisfied" type="radio" class="sr-only" name="rating" value="5">
        <span class="text-2xl" :class="currentVal > 4 ? 'grayscale-0' : 'grayscale'">😍</span>
    </label>
</div>
