<template>
  <section>
    <b-sidebar
    position="static"
    :mobile="mobile"
    :expand-on-hover="expandOnHover"
    :reduce="reduce"
    type="is-light"
    open
    >
        <!-- <div class="p-1"> -->
        <b-menu class="is-custom-mobile">
            <b-menu-list label="Menu">
                <b-menu-item icon="store" label="Beranda" tag="router-link" :to="{ path: '/' }"></b-menu-item>
                <b-menu-item expanded icon="settings" label="Administrasi">
                    <b-menu-item icon="account" label="Users"></b-menu-item>
                    <b-menu-item icon="cellphone-link" label="Devices"></b-menu-item>
                    <b-menu-item icon="cash-multiple" label="Payments" disabled></b-menu-item>
                </b-menu-item>
            </b-menu-list>
        </b-menu>
        <!-- </div> -->
    </b-sidebar>
  </section>
</template>

<script>
export default {
    name:"MySideBar",
  data() {
    return {
      expandOnHover: true,
      mobile: "reduce",
      reduce: true
    };
  }
};
</script>

<style lang="scss">
.p-1 {
  padding: 1em;
}
@media screen and (max-width: 1023px) {
    .b-sidebar {
        .sidebar-content {
            &.is-mini-mobile {
                &:not(.is-mini-expand),
                &.is-mini-expand:not(:hover) {
                    .menu-list {
                        li {
                            a {
                            span:nth-child(2) {
                                display: none;
                            }
                            }
                            ul {
                            padding-left: 0;
                            li {
                                a {
                                display: inline-block;
                                }
                            }
                            }
                        }
                    }
                    .menu-label:not(:last-child) {
                        margin-bottom: 0;
                    }
                }
            }
        }
    }
}
@media screen and (min-width: 1024px) {
    .b-sidebar {
        .sidebar-content {
            &.is-mini {
                &:not(.is-mini-expand),
                &.is-mini-expand:not(:hover) {
                    .menu-list {
                        li {
                            a {
                            span:nth-child(2) {
                                display: none;
                            }
                            }
                            ul {
                            padding-left: 0;
                            li {
                                a {
                                display: inline-block;
                                }
                            }
                            }
                        }
                    }
                    .menu-label:not(:last-child) {
                        margin-bottom: 0;
                    }
                }
            }
        }
    }
}
</style>
