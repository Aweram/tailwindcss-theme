@push("scripts")
    {{-- TODO: new item not work after add --}}
    @if (! $hasSearch)
        <script type="application/javascript">
            let root = document.querySelector("[drag-root]")

            root.querySelectorAll("[drag-grab]").forEach(el => {
                el.addEventListener("mouseover", e => {
                    e.target.closest('[drag-item]').setAttribute("draggable", true)
                })

                el.addEventListener("mouseleave", e => {
                    e.target.closest('[drag-item]').removeAttribute("draggable")
                })
            })

            root.querySelectorAll("[drag-item]").forEach(el => {
                el.counter = 0

                el.addEventListener('dragstart', e => {
                    root.querySelectorAll("[drag-item]").forEach(innerEl => {
                        innerEl.counter = 0
                    })
                    e.target.setAttribute('dragging', true)
                })

                el.addEventListener('drop', e => {
                    e.target.closest('[drag-item]').querySelectorAll("td").forEach(td => {
                        td.classList.remove('opacity-50')
                    })

                    let draggingEl = root.querySelector('[dragging]')
                    let chosenEl = e.target.closest('[drag-item]')

                    if (draggingEl.getAttribute('drag-item-order') > chosenEl.getAttribute('drag-item-order'))
                        e.target.closest('[drag-item]').before(draggingEl)
                    else
                        e.target.closest('[drag-item]').after(draggingEl)

                    let component = Livewire.find(
                        e.target.closest('[wire\\:id]').getAttribute('wire:id')
                    )

                    let orderIds = Array.from(root.querySelectorAll('[drag-item]'))
                        .map(itemEl => itemEl.getAttribute('drag-item'))

                    component.call('reorderItems', orderIds)
                })

                el.addEventListener('dragenter', e => {
                    el.counter++
                    e.target.closest('[drag-item]').querySelectorAll("td").forEach(td => {
                        td.classList.add('opacity-50')
                    })
                    e.preventDefault()
                })

                el.addEventListener('dragover', e => { e.preventDefault() })

                el.addEventListener('dragleave', e => {
                    el.counter--
                    if (el.counter <= 0)
                        e.target.closest('[drag-item]').querySelectorAll("td").forEach(td => {
                            td.classList.remove('opacity-50')
                        })
                })

                el.addEventListener('dragend', e => {
                    e.target.removeAttribute('dragging')
                })
            })
        </script>
    @endif
@endpush
