<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">

    <title>Create ticket | CC3</title>
    <meta content="CC3" name="description">

    <?php include('../_head.php') ?>
</head>
<body class="<?= htmlspecialchars($theme) ?> <?= htmlspecialchars($menuType) ?>">

<div class="full_page <?php if($isVerticalPage){ ?> full_page__vertical <?php } ?>">

    <?php
    $currentPage = 'support';
    if($isVerticalPage){
        include('../_header_v.php');
    } else {
        include('../_header.php');
    }?>

    <main class="main_page">
        <div class="container_1200">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <h1 class="sup__title">Connect with Your Assistant</h1>
                    <div class="sup__text">
                        Send messages directly to your personal investment advisor. Get expert
                        guidance on your portfolio, market insights, and personalized
                        recommendations.
                    </div>
                    <div class="sup_ib">
                        <div class="sup_ib__item">
                            <div class="sup_ib__icon">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 1L20.72 2.82C20.9467 2.87333 21.1333 2.99333 21.28 3.18C21.4267 3.36667 21.5 3.57333 21.5 3.8V13.78C21.5 14.7933 21.2633 15.74 20.79 16.62C20.3167 17.5 19.66 18.22 18.82 18.78L12.5 23L6.18 18.78C5.34 18.22 4.68333 17.5 4.21 16.62C3.73667 15.74 3.5 14.7933 3.5 13.78V3.8C3.5 3.57333 3.57333 3.36667 3.72 3.18C3.86667 2.99333 4.05333 2.87333 4.28 2.82L12.5 1ZM12.5 3.04L5.5 4.6V13.78C5.5 14.46 5.65667 15.0933 5.97 15.68C6.28333 16.2667 6.72 16.7467 7.28 17.12L12.5 20.6L17.72 17.12C18.28 16.7467 18.7167 16.2667 19.03 15.68C19.3433 15.0933 19.5 14.46 19.5 13.78V4.6L12.5 3.04ZM16.96 8.22L18.36 9.64L12 16L7.76 11.76L9.18 10.34L12 13.18L16.96 8.22Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="sup_ib__info">
                                <div class="sup_ib__title">Secure Communication</div>
                                <div class="sup_ib__text">All messages are encrypted and protected with bank-level security protocols.</div>
                            </div>
                        </div>
                        <div class="sup_ib__item">
                            <div class="sup_ib__icon">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 22C11.14 22 9.84 21.74 8.6 21.22C7.41333 20.7133 6.35667 19.9967 5.43 19.07C4.50333 18.1433 3.78667 17.0867 3.28 15.9C2.76 14.66 2.5 13.36 2.5 12C2.5 10.64 2.76 9.34 3.28 8.1C3.78667 6.91333 4.50333 5.85667 5.43 4.93C6.35667 4.00333 7.41333 3.28667 8.6 2.78C9.84 2.26 11.14 2 12.5 2C13.86 2 15.16 2.26 16.4 2.78C17.5867 3.28667 18.6433 4.00333 19.57 4.93C20.4967 5.85667 21.2133 6.91333 21.72 8.1C22.24 9.34 22.5 10.64 22.5 12C22.5 13.36 22.24 14.66 21.72 15.9C21.2133 17.0867 20.4967 18.1433 19.57 19.07C18.6433 19.9967 17.5867 20.7133 16.4 21.22C15.16 21.74 13.86 22 12.5 22ZM12.5 20C13.9533 20 15.3 19.6333 16.54 18.9C17.74 18.1933 18.6933 17.24 19.4 16.04C20.1333 14.8 20.5 13.4533 20.5 12C20.5 10.5467 20.1333 9.2 19.4 7.96C18.6933 6.76 17.74 5.80667 16.54 5.1C15.3 4.36667 13.9533 4 12.5 4C11.0467 4 9.7 4.36667 8.46 5.1C7.26 5.80667 6.30667 6.76 5.6 7.96C4.86667 9.2 4.5 10.5467 4.5 12C4.5 13.4533 4.86667 14.8 5.6 16.04C6.30667 17.24 7.26 18.1933 8.46 18.9C9.7 19.6333 11.0467 20 12.5 20ZM13.5 12H17.5V14H11.5V7H13.5V12Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="sup_ib__info">
                                <div class="sup_ib__title">Quick Response</div>
                                <div class="sup_ib__text">Get answers from your advisor within 24 hours on business days.</div>
                            </div>
                        </div>
                        <div class="sup_ib__item">
                            <div class="sup_ib__icon">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.6399 8.18004L9.97994 13.82C9.79327 14.02 9.69994 14.2567 9.69994 14.53C9.69994 14.8034 9.79661 15.04 9.98994 15.24C10.1833 15.44 10.4199 15.54 10.6999 15.54C10.9799 15.54 11.2133 15.44 11.3999 15.24L17.0599 9.58004C17.4466 9.19337 17.7066 8.74337 17.8399 8.23004C17.9733 7.71671 17.9733 7.20337 17.8399 6.69004C17.7066 6.17671 17.4466 5.72671 17.0599 5.34004C16.6733 4.95337 16.2233 4.69337 15.7099 4.56004C15.1966 4.42671 14.6833 4.42671 14.1699 4.56004C13.6566 4.69337 13.2066 4.95337 12.8199 5.34004L7.15994 11C6.51994 11.64 6.08661 12.39 5.85994 13.25C5.63327 14.11 5.63327 14.97 5.85994 15.83C6.08661 16.69 6.51994 17.44 7.15994 18.08C7.79994 18.72 8.54994 19.15 9.40994 19.37C10.2699 19.59 11.1299 19.59 11.9899 19.37C12.8499 19.15 13.5999 18.72 14.2399 18.08L19.8799 12.42L21.2999 13.82L15.6399 19.48C14.7466 20.3734 13.6933 20.98 12.4799 21.3C11.2933 21.62 10.1066 21.62 8.91994 21.3C7.70661 20.98 6.64994 20.3734 5.74994 19.48C4.84994 18.5867 4.23994 17.5334 3.91994 16.32C3.61327 15.1334 3.61327 13.9467 3.91994 12.76C4.23994 11.5467 4.84661 10.4867 5.73994 9.58004L11.3999 3.92004C12.0399 3.28004 12.7899 2.85004 13.6499 2.63004C14.5099 2.41004 15.3699 2.41004 16.2299 2.63004C17.0899 2.85004 17.8399 3.28004 18.4799 3.92004C19.1199 4.56004 19.5499 5.31004 19.7699 6.17004C19.9899 7.03004 19.9899 7.89004 19.7699 8.75004C19.5499 9.61004 19.1199 10.36 18.4799 11L12.8199 16.66C12.4333 17.0467 11.9833 17.3067 11.4699 17.44C10.9566 17.5734 10.4433 17.5734 9.92994 17.44C9.41661 17.3067 8.96661 17.0467 8.57994 16.66C8.19327 16.2734 7.93327 15.8234 7.79994 15.31C7.66661 14.7967 7.66661 14.2834 7.79994 13.77C7.93327 13.2567 8.19327 12.8067 8.57994 12.42L14.2399 6.76004L15.6399 8.18004Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="sup_ib__info">
                                <div class="sup_ib__title">Share Documents</div>
                                <div class="sup_ib__text">Attach files up to 20MB including documents, spreadsheets, and images.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="sup_box">
                       <div class="sup_input_group">
                           <div class="sup_input__label">Sujet :</div>
                           <input class="sup_input" type="text" placeholder="Objet du message" >
                       </div>

                        <div class="sup_input_group">
                            <div class="sup_input__label">Composez votre message :</div>
                            <textarea type="text" name="message" id="emessage" class="form-control hideTextarea" placeholder="" style="min-height: 200px;"></textarea>
                        </div>
                        <div class="sup_input_group">
                            <div x-data="fileUploader()" class="d-flex flex-column gap-2">
                                <!-- кастомная dropzone -->
                                <div class="dropzone"
                                     x-show="!files.length"
                                     :class="{ 'dragover': dragover }"
                                     @click="$refs.fileInput.click()"
                                     @dragover.prevent="dragover = true"
                                     @dragleave.prevent="dragover = false"
                                     @drop.prevent="handleDrop($event)">
                                    <div class="m_dropzone_icon">
                                        <svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M25.625 18V21.75H29.375V24.25H25.625V28H23.125V24.25H19.375V21.75H23.125V18H25.625ZM25.625 3C25.975 3 26.2708 3.12083 26.5125 3.3625C26.7542 3.60417 26.875 3.9 26.875 4.25V15.5H24.375V5.5H4.375V23L16.875 10.5L20.625 14.25V17.775L16.875 14.025L7.9 23H16.875V25.5H3.125C2.775 25.5 2.47917 25.3792 2.2375 25.1375C1.99583 24.8958 1.875 24.6 1.875 24.25V4.25C1.875 3.9 1.99583 3.60417 2.2375 3.3625C2.47917 3.12083 2.775 3 3.125 3H25.625ZM9.375 8C9.825 8 10.2417 8.1125 10.625 8.3375C11.0083 8.5625 11.3125 8.86667 11.5375 9.25C11.7625 9.63333 11.875 10.05 11.875 10.5C11.875 10.95 11.7625 11.3667 11.5375 11.75C11.3125 12.1333 11.0083 12.4375 10.625 12.6625C10.2417 12.8875 9.825 13 9.375 13C8.925 13 8.50833 12.8875 8.125 12.6625C7.74167 12.4375 7.4375 12.1333 7.2125 11.75C6.9875 11.3667 6.875 10.95 6.875 10.5C6.875 10.05 6.9875 9.63333 7.2125 9.25C7.4375 8.86667 7.74167 8.5625 8.125 8.3375C8.50833 8.1125 8.925 8 9.375 8Z" fill="#9CA3AF"/>
                                        </svg>
                                    </div>
                                    <div class="dropzone_msg mb-1">Ajouter un fichier</div>
                                    <div class="dropzone_msg"><span>Click here for upload</span></div>
                                    <div class="dropzone_size">Liste des fichiers autorisés: doc, docx, xls, xlsx, csv, jpg, jpeg, png, tiff, txt, pdf - Taille
                                        totale des pièces jointes : 20M(b)</div>
                                    <input type="file" multiple class="hidden" x-model="ticketFile" x-ref="fileInput" @change="previewFiles">
                                </div>

                                <div class="files_grid">
                                    <template x-for="(file, index) in files" :key="index">
                                        <div class="files_grid_item">
                                            <div class="files_grid_file">
                                                <div class="m_file_preview">
                                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18.4199 6.66683V17.5002C18.4199 17.7335 18.3394 17.9307 18.1783 18.0918C18.0171 18.2529 17.8199 18.3335 17.5866 18.3335H4.25326C4.01992 18.3335 3.8227 18.2529 3.66159 18.0918C3.50048 17.9307 3.41992 17.7335 3.41992 17.5002V2.50016C3.41992 2.26683 3.50048 2.06961 3.66159 1.90849C3.8227 1.74739 4.01992 1.66683 4.25326 1.66683H13.4199L18.4199 6.66683ZM16.7533 7.50016H12.5866V3.3335H5.08659V16.6668H16.7533V7.50016ZM7.58659 5.8335H10.0866V7.50016H7.58659V5.8335ZM7.58659 9.16683H14.2533V10.8335H7.58659V9.16683ZM7.58659 12.5002H14.2533V14.1668H7.58659V12.5002Z" fill="#4B5563"/>
                                                    </svg>
                                                </div>
                                                <div class="files_grid_info">
                                                    <div class="files_grid_name" x-text="file.name"></div>
                                                    <div class="files_grid_size" x-text="formatSize(file.size)"></div>
                                                </div>
                                                <button type="button" class="files_grid_remove" @click="removeFile(index)">×</button>
                                            </div>
                                            <!-- ошибка -->
                                            <div class="error" x-text="file.error" x-show="file.error"></div>

                                            <!-- прогресс -->
                                            <div class="progress" :style="`width: ${file.progress}%`"></div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <button class="btn btn-primary w-100">Valider</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>



<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../assets/js/app.js"></script>

<script src="../assets/libs/ckeditor/ckeditor.js"></script>

<div id="editor"></div>

<script>
    ClassicEditor.create(document.querySelector('#emessage'));

    function fileUploader() {
        return {
            files: [],
            dragover: false,
            allowedTypes: [
                // Изображения
                'image/jpeg',
                'image/jpg',
                'image/png',
                'image/svg+xml',
                'image/tiff',

                // Документы
                'application/pdf',

                // DOC / DOCX
                'application/msword',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',

                // XLS / XLSX
                'application/vnd.ms-excel',
                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',

                // CSV
                'text/csv',

                // TXT
                'text/plain'
            ],
            maxSize: 20 * 1024 * 1024, // 20 MB

            handleDrop(e) {
                this.dragover = false;
                this.addFiles(e.dataTransfer.files);
                this.uploadAll()
            },

            previewFiles(e) {
                this.addFiles(e.target.files);
                e.target.value = "";
            },

            addFiles(fileList) {
                for (let file of fileList) {
                    let error = null;

                    // проверка типа
                    if (!this.allowedTypes.includes(file.type)) {
                        error = "Недопустимый формат";
                    }

                    // проверка размера
                    if (file.size > this.maxSize) {
                        error = "Файл превышает 20 МБ";
                    }

                    this.files.push({
                        file,
                        name: file.name,
                        size: file.size,
                        type: file.type,
                        url: error ? null : (file.type.startsWith('image/') ? URL.createObjectURL(file) : null),
                        progress: 0,
                        error
                    });
                }
            },

            removeFile(index) {
                if (this.files[index].url) {
                    URL.revokeObjectURL(this.files[index].url);
                }
                this.files.splice(index, 1);
            },

            async uploadAll() {
                for (let f of this.files) {
                    if (!f.error) {
                        await this.fakeUpload(f);
                    }
                }
            },

            fakeUpload(file) {
                return new Promise(resolve => {
                    file.progress = 0;
                    let interval = setInterval(() => {
                        if (file.progress >= 100) {
                            clearInterval(interval);
                            resolve();
                        } else {
                            file.progress += 15;
                        }
                    }, 200);
                });
            },

            formatSize(size) {
                if (size < 1024) return size + ' B';
                else if (size < 1024 * 1024) return (size / 1024).toFixed(1) + ' KB';
                else return (size / (1024 * 1024)).toFixed(1) + ' MB';
            }
        }
    }
</script>


<script type="text/javascript" src="../assets/js/alpinejs.min.js"></script>


</body>
</html>