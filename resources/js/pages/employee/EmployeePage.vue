<template>
  <div class="d-flex flex-grow-1 flex-column">
    <v-row class="flex-grow-0" dense>
      <v-col cols="12">
        <div class="titerbar">
          <v-row align="center" no-gutters>
            <h1 style="color: #fff;">จัดการเจ้าหน้าที่</h1>
           
              <v-col cols="12" >
                <div class="text-right">
                  <v-btn color="#d30000"><v-icon>mdi-account-plus-outline</v-icon>เพิ่มเจ้าหน้าที่</v-btn>
                </div>
              </v-col>
            </v-row>
            </div>
            <v-simple-table height="300px">
              <template v-slot:default>
                <thead>
                  <tr>
                    <th class="text-left">
                      ลำดับ
                    </th>
                    <th class="text-left">
                      รายชื่อ
                    </th>
                    <th class="text-left">
                      หมายเลข
                    </th>
                    <th class="text-left">
                      
                    </th>
                    <th class="text-left">
                      
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(item, key) in data" :key="key" >
                    <td>{{item.id}}</td>
                    <td>{{item.name}}</td>
                    <td>{{item.id_card}}</td>
                    <td></td>
                    <td>
                      <div class="text-right">
                        <v-btn small icon color="#333">
                          <v-icon>mdi-dots-vertical-circle-outline</v-icon>
                        </v-btn>
                        <v-btn small icon color="#d30000">
                          <v-icon>mdi-delete-outline</v-icon>
                        </v-btn>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </template>
            </v-simple-table>
        </v-col>
      </v-row>
    </div>
  </template>
<script>

export default {
  components: {
  },
  data() {
    return {
      data: [
        { id: 1, name: '111111', id_card: 11111 },
        { id: 2, name: '222222', id_card: 22222 },
        { id: 3, name: '333333', id_card: 33333 },
        { id: 4, name: '444444', id_card: 44444 },
        { id: 1, name: '555555', id_card: 55555 },
        { id: 2, name: '666666', id_card: 66666 },
        { id: 3, name: '777777', id_card: 77777 },
        { id: 4, name: '888888', id_card: 88888 }
      ]
    }
  },
}
</script>

<style lang="scss" scoped>
.titerbar {background-color: #607D8B; padding: 15px; border-radius: 5px; margin-bottom: 15px;
  button { color: #fff; }
}



</style>
