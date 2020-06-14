let inMemoryStorage = {};
let storage = localStorage;

function isSupported() {
  try {
    const key = 'is_session_storage_supported';
    storage.setItem(key, key);
    storage.removeItem(key);
    return true;
  } catch (error) {
    return false;
  }
}

export function getItem(key) {
  if (isSupported()) {
    return storage.getItem(key);
  }
  return inMemoryStorage[key] || null;
}

export function setItem(key, value) {
  if (isSupported()) {
    storage.setItem(key, value);
  } else {
    inMemoryStorage[key] = value;
  }
}

export function removeItem(key) {
  if (isSupported()) {
    storage.removeItem(key);
  } else {
    delete inMemoryStorage[key];
  }
}

export function clear(key) {
  if (isSupported()) {
    storage.clear();
  } else {
    inMemoryStorage = {};
  }
}

export function key(n) {
  if (isSupported()) {
    return storage.key(n);
  } else {
    return Object.keys(inMemoryStorage)[n] || null;
  }
}
