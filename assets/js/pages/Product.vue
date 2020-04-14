<template>
    <div class="columns">
        <div class="column is-2">
            <SidebarShop></SidebarShop>
        </div>
        <div class="column is-10">
            <div class="field">
                kamu berada di sini:
                <b-tag 
                    type="is-primary">
                    Toko
                </b-tag> / 
                <b-tag 
                    type="is-primary">
                    Produk
                </b-tag>
            </div>
            <div class="buttons">
                <b-button type="is-primary" outlined @click="isCardModalActive = true">Tambah Produk</b-button>
            </div>
            <b-table
            :data="isEmpty ? [] : data"
            :bordered="isBordered"
            :striped="isStriped"
            :narrowed="isNarrowed"
            :hoverable="isHoverable"
            :loading="isLoading"
            :focusable="isFocusable"
            :mobile-cards="hasMobileCards">

                <template slot-scope="props">
                    <b-table-column field="id" label="ID" width="40" numeric>
                        {{ props.row.id }}
                    </b-table-column>

                    <b-table-column field="first_name" label="First Name">
                        {{ props.row.first_name }}
                    </b-table-column>

                    <b-table-column field="last_name" label="Last Name">
                        {{ props.row.last_name }}
                    </b-table-column>

                    <b-table-column field="date" label="Date" centered>
                        <span class="tag is-success">
                            {{ new Date(props.row.date).toLocaleDateString() }}
                        </span>
                    </b-table-column>

                    <b-table-column label="Gender">
                        <span>
                            <b-icon pack="fas"
                                :icon="props.row.gender === 'Male' ? 'mars' : 'venus'">
                            </b-icon>
                            {{ props.row.gender }}
                        </span>
                    </b-table-column>
                </template>

                <template slot="empty">
                    <section class="section">
                        <div class="content has-text-grey has-text-centered">
                            <p>
                                <b-icon
                                    icon="emoticon-sad"
                                    size="is-large">
                                </b-icon>
                            </p>
                            <p>Nothing here.</p>
                        </div>
                    </section>
                </template>
            </b-table>
            <b-pagination
                :total="total"
                :current.sync="current"
                :range-before="rangeBefore"
                :range-after="rangeAfter"
                :order="order"
                :size="size"
                :simple="isSimple"
                :rounded="isRounded"
                :per-page="perPage"
                :icon-prev="prevIcon"
                :icon-next="nextIcon"
                aria-next-label="Next page"
                aria-previous-label="Previous page"
                aria-page-label="Page"
                aria-current-label="Current page">
            </b-pagination>

            <b-modal :active.sync="isCardModalActive" :width="640" scroll="keep">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="/static/img/placeholder-1280x960.png" alt="Image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-48x48">
                                    <img src="/static/img/placeholder-1280x960.png" alt="Image">
                                </figure>
                            </div>
                            <div class="media-content">
                                <p class="title is-4">John Smith</p>
                                <p class="subtitle is-6">@johnsmith</p>
                            </div>
                        </div>

                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                            <a>#css</a> <a>#responsive</a>
                            <br>
                            <small>11:09 PM - 1 Jan 2016</small>
                        </div>
                    </div>
                </div>
            </b-modal>
        </div>
    </div>
</template>

<script>
import SidebarShop from '../components/SidebarShop'
export default {
    name:"product",
    components: {
        SidebarShop
    },
    data() {
        const data = [
                { 'id': 1, 'first_name': 'Jesse', 'last_name': 'Simmons', 'date': '2016/10/15 13:43:27', 'gender': 'Male' },
                { 'id': 2, 'first_name': 'John', 'last_name': 'Jacobs', 'date': '2016/12/15 06:00:53', 'gender': 'Male' },
                { 'id': 3, 'first_name': 'Tina', 'last_name': 'Gilbert', 'date': '2016/04/26 06:26:28', 'gender': 'Female' },
                { 'id': 4, 'first_name': 'Clarence', 'last_name': 'Flores', 'date': '2016/04/10 10:28:46', 'gender': 'Male' },
                { 'id': 5, 'first_name': 'Anne', 'last_name': 'Lee', 'date': '2016/12/06 14:38:38', 'gender': 'Female' }
            ]

        return {
                data,
                isEmpty: false,
                isBordered: true,
                isStriped: false,
                isNarrowed: true,
                isHoverable: true,
                isFocusable: false,
                isLoading: false,
                hasMobileCards: true,

                total: 200,
                current: 10,
                perPage: 10,
                rangeBefore: 3,
                rangeAfter: 1,
                order: '',
                size: '',
                isSimple: false,
                isRounded: false,
                prevIcon: 'chevron-left',
                nextIcon: 'chevron-right',

                isCardModalActive: false
            }
    }
};
</script>