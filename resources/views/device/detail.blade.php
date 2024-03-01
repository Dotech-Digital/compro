<div id="modal-master" class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{!! $title !!}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body p-0">
            <div class="col-12">
                <div class="row py-4">
                    {{-- <div class="col"><img src="https://upload.wikimedia.org/wikipedia/commons/3/37/MITC2013_QR_Code.jpg" alt=""></div> --}}
                    @if ($device->status == 'unauthenticated')
                        <div class="col-5 d-flex justify-content-center align-items-center">
                            <img alt="" id="qr-code"
                                src="{{ array_key_exists('qr', $qr) ? $qr['qr'] : null }}">
                        </div>
                    @endif
                    <div class="col-7">
                        <table class="table">
                            @foreach ($data as $key => $value)
                                <tr>
                                    <th>{{ $key }}</th>
                                    <td>{{ $value }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <th>Status</th>
                                @if ($device->status == 'authenticated')
                                    <td><span class="badge bg-gradient-success">Ready</span></td>
                                @endif
                                @if ($device->status != 'authenticated')
                                    <td><span class="badge bg-gradient-danger">Not Ready</span></td>
                                @endif
                            </tr>
                            {{-- <tr>
                                <td>Date Created</td>
                                <td>{{ $device->created_at->format('d/m/Y') }}</td>
                            </tr> --}}
                        </table>
                        {{-- <div>
                            @if ($device->status == 'authenticated')
                                <button x-on:click="deleteSession({{ $device->phone_number }})"
                                    class="btn btn-icon btn-3 btn-primary" type="button">
                                    <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
                                    <span class="btn-inner--text">keluar</span>
                                </button>
                            @endif

                            @if ($device->status == 'unauthenticated')
                                <button x-on:click="addSession()" class="btn btn-icon btn-3 btn-success" type="button">
                                    <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
                                    <span class="btn-inner--text">Rescan</span>
                                </button>
                            @endif

                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-warning">Exit</button>
        </div>
    </div>
</div>

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- <script>
    function tes(){
      axios.post('http://localhost:3000/sessions/add',{
        "sessionId": "john"
      }).then(res => console.log(res)).err(err => console.log(err))

    }
  </script> --}}

<script>
    function Device() {
        device = @json($device);
        console.log(device)

        // prod
        // baseUrl      = 'https://api-wa.mahirtechnology.com';

        // dev
        baseUrl = 'https://wa-dotech.vercel.app';

        originUrl = 'http://localhost:8000/api';
        session_data = {
            'sessionId': device.phone_number,
            "readIncomingMessages": true,
            "syncFullHistory": true
            // 'isLegacy' : false
        };

        return {
            // data
            'status': '',
            'qr': '',
            // methods
            init() {
                // setInterval(() => {window.location.reload()}, 3000)

                if (device.status == 'unauthenticated') {
                    setInterval(() => {
                        this.addSession(session_data)
                    }, 10000);

                    setInterval(() => {
                        axios.get(baseUrl + '/sessions/' + device.phone_number + '/status')
                            .then(res => {
                                if (res.data.status == 'AUTHENTICATED') {
                                    axios.post(originUrl + '/update-device-status', {
                                            'id': device.id,
                                            'status': 'authenticated'
                                        })
                                        .then(res => window.location.reload())
                                        .catch(err => console.log(err))
                                }
                                console.log('cek status')
                            })
                            .catch(err => console.log(err))
                    }, 5000);

                }

                console.log('init');
            },

            addSession() {
                axios.post(baseUrl + '/sessions/add', session_data)
                    .then(response => {
                        document.getElementById('qr-code').src = response.data.qr;
                        // this.qr =  response.data.data.qr;
                        // console.log(response.data.data.qr)
                        console.log(response.data.qr)
                    })
                    .catch(error => {
                        console.log(error)
                        // console.log(error.response);
                        // console.log(error.response.status);
                        // console.log(error.response.data.message);
                        // Toast.fire({
                        //     icon: 'success',
                        //     title: error.response.data.message
                        //   })
                    });
            },

            deleteSession(param) {
                axios.delete(baseUrl + '/sessions/0' + param)
                    .then(res => {
                        console.log(res.data);
                        axios.post(originUrl + '/update-device-status', {
                                'id': device.id,
                                'status': 'unauthenticated'
                            })
                            .then(res => window.location.reload())
                            .catch(err => console.log(err))
                    })
                    .catch(err => {
                        console.log(err.response.data);
                    })
            }
        }
    }
</script>
