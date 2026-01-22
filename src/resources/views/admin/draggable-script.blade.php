@push("scripts")
    @if (! $hasSearch)
        <script type="application/javascript">
            (function () {
                makeDraggable()
                document.addEventListener("update-list", function () {
                    setTimeout(() => makeDraggable(), 500)
                })
            })()

            function makeDraggable() {
                let root = document.querySelector("[drag-root]")
                if (! root) return

                root.querySelectorAll("[drag-grab]").forEach(el => {
                    el.mouseover = null
                    el.addEventListener("mouseover", e => {
                        e.target.closest('[drag-item]').setAttribute("draggable", true)
                    })

                    el.mouseleave = null
                    el.addEventListener("mouseleave", e => {
                        e.target.closest('[drag-item]').removeAttribute("draggable")
                    })
                })

                root.querySelectorAll("[drag-item]").forEach(el => {
                    el.counter = 0

                    el.dragstart = null
                    el.addEventListener('dragstart', e => {
                        root.querySelectorAll("[drag-item]").forEach(innerEl => {
                            innerEl.counter = 0
                        })
                        e.target.setAttribute('dragging', true)
                    })

                    el.drop = null
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

                    el.dragenter = null
                    el.addEventListener('dragenter', e => {
                        el.counter++
                        e.target.closest('[drag-item]').querySelectorAll("td").forEach(td => {
                            td.classList.add('opacity-50')
                        })
                        e.preventDefault()
                    })

                    el.dragover = null
                    el.addEventListener('dragover', e => { e.preventDefault() })

                    el.dragleave = null
                    el.addEventListener('dragleave', e => {
                        el.counter--
                        if (el.counter <= 0)
                            e.target.closest('[drag-item]').querySelectorAll("td").forEach(td => {
                                td.classList.remove('opacity-50')
                            })
                    })

                    el.dragend = null
                    el.addEventListener('dragend', e => {
                        e.target.removeAttribute('dragging')
                    })
                })
            }
        </script>
    @endif
@endpush
